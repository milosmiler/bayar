<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		return parent::__construct();
	}

	public function index() 
	{
		//Verificar si existe una session
		if (!$this->session->userdata('id')) {

			$this->load->helper('form');
			//varificar que el metodo de envio sea POST
			if($this->input->post("submit") && $_POST) {
				return $this->store();
			}
			else {
				return $this->load->view('admin/index');
			}
		}

		return redirect("admin/dashboard");
	}



	public function store() 
	{
		$this->load->library('form_validation');
		$this->load->helper("security");

		//campos
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]|xss_clean');

		//emensajes
		$this->form_validation->set_message("required", "El campo %s es requerido");
        $this->form_validation->set_message("valid_email", "El campo %s no es valido");
        $this->form_validation->set_message("xss_clean", "El campo %s no es valido xss");
        $this->form_validation->set_message("min_length", "El minimo de caracteres son 4");
        $this->form_validation->set_message("max_length", "El maximo de caracteres son 20");

		if ($this->form_validation->run() == false) {
			return $this->load->view('admin/index');
		}
		
		$this->load->library('session');

		$data['email'] = $this->input->post("email");
  		$data['password'] = $this->input->post("password");

  		//Load Model
		$this->load->model("User", "user");

		if ($usuario = $this->user->auth($data)) {

			//Verificar si el password es correcto
			if ( password_verify( $data['password'], $usuario->password ) ) {

				$this->load->library('session');
				$arraydata = array(
					"id" => $usuario->user_id,
					"nombre" => $usuario->nickname,
					"email" => $usuario->email,
					"last" => $usuario->last_entry
				);

				$this->session->set_userdata($arraydata);

				redirect("admin/dashboard");
			}

			$data['error_pass'] = "<p style='color:red'>El password es incorrecto</p>";
			return  $this->load->view('admin/index', $data);
		}

		$data['error_user'] = "<p style='color:red'>El email no existe</p>";
		return  $this->load->view('admin/index', $data);
	}
}
