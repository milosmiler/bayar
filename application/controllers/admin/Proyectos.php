<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    public function __construct()
    {
        return parent::__construct();
    }

    public function index()
    {
        $this->load->library('session');
        $this->load->helper('form');

        //validar si existe una sesion de usuario
        if (!$this->session->userdata('id')) {
            return redirect(base_url("admin"));
        }

        if ($this->input->post("submit") && $_POST) {
            return $this->saveDataPage();
        }

        $this->load->model("Proyect_Model", "proyect");

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "pagina_proyect";
        $data["datos"] = $this->proyect->getAllProperties();

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_proyectos");
        $this->load->view("admin/layouts/footer");
    }



    public function saveDataPage()
    {
        $this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('text-principal', 'Texto Principal', 'trim|required|xss_clean');
        $this->form_validation->set_rules('item1-titulo', '1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto1-bold', '1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto1', '1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('item2-titulo', '2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto2-bold', '2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto2', '2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('item3-titulo', '3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto3-bold', '3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto3', '3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('item4-titulo', '4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto4-bold', '4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto4', '4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('item5-titulo', '5', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto5-bold', '5', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto5', '5', 'trim|required|xss_clean');

        //emensajes
        $this->form_validation->set_message("required", "El campo es requerido");
        $this->form_validation->set_message("xss_clean", "El campo no es valido xss");


        //Model
        $this->load->model("Proyect_Model", "proyect");

        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["datos"] = $this->proyect->getAllProperties();
            $data["menu"] = "pagina_proyect";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/pagina_proyectos");
            $this->load->view("admin/layouts/footer");
            return false;
        }

        //Obteniendo todos los campos
        $data = $this->input->post();

        //actualizar datos
        if (!$this->proyect->insertAllProperties($data)) {
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";
        }
        else {
             $data["success"] = "Se actualizaron los datos correctamente";
        }
       
        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["datos"] = $this->proyect->getAllProperties();
        $data["menu"] = "pagina_proyect";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_proyectos");
        $this->load->view("admin/layouts/footer");

    }
}