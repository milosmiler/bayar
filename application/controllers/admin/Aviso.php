<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aviso extends CI_Controller {

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
            return $this->saveAviso();
        }

        $this->load->model("Aviso_Model", "aviso");

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "pagina_aviso";
        $data["datos"] = $this->aviso->getAllProperties();

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_aviso");
        $this->load->view("admin/layouts/footer");
    }



    public function saveAviso()
    {

        $this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('aviso1', '', 'trim|required|xss_clean');

        //emensajes
        $this->form_validation->set_message("required", "El campo es requerido");
        $this->form_validation->set_message("xss_clean", "El campo no es valido xss");


        //Model
        $this->load->model("Aviso_Model", "aviso");

        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["datos"] = $this->aviso->getAllProperties();
            $data["menu"] = "pagina_aviso";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/pagina_aviso");
            $this->load->view("admin/layouts/footer");
            return false;
        }


        //Obteniendo todos los campos
        $data = $this->input->post();

        //actualizar datos
        if (!$this->aviso->insertAllProperties($data)) {
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";
        }
        else {
             $data["success"] = "Se actualizaron los datos correctamente";
        }
       
        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["datos"] = $this->aviso->getAllProperties();
        $data["menu"] = "pagina_aviso";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_aviso");
        $this->load->view("admin/layouts/footer");

    }
}