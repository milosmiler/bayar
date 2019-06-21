<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        return parent::__construct();
    }

    public function index()
    {
        $this->load->library('session');

         //validar si existe una sesion de usuario
        if (!$this->session->userdata('id')) {
            return redirect(base_url("admin"));
        }

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/dashboard");
        $this->load->view("admin/layouts/footer");
    }
}