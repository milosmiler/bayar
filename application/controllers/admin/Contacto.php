<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

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
            return $this->saveDataTools();
        }

        $this->load->model("Contacto_Model", "contacto");

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "pagina_contacto";
        $data["datos"] = $this->contacto->getAllProperties();

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_contacto");
        $this->load->view("admin/layouts/footer");
    }


    public function saveDataTools()
    {
        $this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('direccion1', 'Direccion Parte 1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('direccion2', 'Direccion Parte 2', 'trim|required|xss_clean');

        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');

        $this->form_validation->set_rules('s_imagen1', '', 'callback_file_check[s_imagen1]');
        $this->form_validation->set_rules('s_imagen2', '', 'callback_file_check[s_imagen2]');
        $this->form_validation->set_rules('s_imagen3', '', 'callback_file_check[s_imagen3]');


        //emensajes
        $this->form_validation->set_message("required", "El campo %s es requerido");
        $this->form_validation->set_message("xss_clean", "El campo %s no es valido xss");
        $this->form_validation->set_message("valid_email", "El campo %s no es valido");


        //Model
        $this->load->model("Contacto_Model", "contacto");


        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["datos"] = $this->contacto->getAllProperties();
            $data["menu"] = "pagina_contacto";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/pagina_contacto");
            $this->load->view("admin/layouts/footer");
            return false;
        }


        //upload configuration
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 50024;
        $this->load->library('upload', $config);
        $dataold = $this->contacto->getAllProperties();
        $dataup = null;



        //upload file to directory
        if (isset($_FILES["s_imagen1"]['name']) && $_FILES["s_imagen1"]['name']!="") {
            if ($this->upload->do_upload("s_imagen1")) {
                $dataup["uploadDataS1"] = $this->upload->data();
            }
            else {
                $this->deshacerCambios($dataup);
                $data['error_update'] = $this->upload->display_errors();

                //vista
                $data["nombre_admin"] = $this->session->userdata('nombre');
                $data["datos"] = $this->contacto->getAllProperties();
                $data["menu"] = "pagina_contacto";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/pagina_contacto");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }



        //upload file to directory
        if (isset($_FILES["s_imagen2"]['name']) && $_FILES["s_imagen2"]['name']!="") {
            if ($this->upload->do_upload("s_imagen2")) {
                $dataup["uploadDataS2"] = $this->upload->data();
            }
            else {
                $this->deshacerCambios($dataup);
                $data['error_update'] = $this->upload->display_errors();

                //vista
                $data["nombre_admin"] = $this->session->userdata('nombre');
                $data["datos"] = $this->contacto->getAllProperties();
                $data["menu"] = "pagina_contacto";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/pagina_contacto");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }


        //upload file to directory
        if (isset($_FILES["s_imagen3"]['name']) && $_FILES["s_imagen3"]['name']!="") {
            if ($this->upload->do_upload("s_imagen3")) {
                $dataup["uploadDataS3"] = $this->upload->data();
            }
            else {
                $this->deshacerCambios($dataup);
                $data['error_update'] = $this->upload->display_errors();

                //vista
                $data["nombre_admin"] = $this->session->userdata('nombre');
                $data["datos"] = $this->contacto->getAllProperties();
                $data["menu"] = "pagina_contacto";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/pagina_contacto");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }



        //Obteniendo todos los campos
        $data = $this->input->post();

        //actualizar datos
        if (!$this->contacto->insertAllProperties($data, $dataup)) {
            $this->deshacerCambios($dataup);
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";
        }
        else {
             $data["success"] = "Se actualizaron los datos correctamente";
        }


        //vista
        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["datos"] = $this->contacto->getAllProperties();
        $data["menu"] = "pagina_contacto";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_contacto");
        $this->load->view("admin/layouts/footer");

    }



    //IMAGENES
    function file_check($str, $str2) {
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = $this->get_mime_by_extension($_FILES[$str2]['name']);
        if(isset($_FILES[$str2]['name']) && $_FILES[$str2]['name']!="") {
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only gif/jpg/png file.');
                return false;
            }
        }
    }



    //GET EXTENCION
    public function get_mime_by_extension($filename)
    {
        static $mimes;
        if ( ! is_array($mimes)) // <- Will only return TRUE on the first call
        {
            $mimes = get_mimes(); // <- By removing the &reference declaration
            // Any subsequent changes to `$_mimes` will not be accounted for
            if (empty($mimes))
            {
                return FALSE;
            }
        }
        $extension = strtolower(substr(strrchr($filename, '.'), 1));
        if (isset($mimes[$extension]))
        {
          return is_array($mimes[$extension])
              ? current($mimes[$extension])
              : $mimes[$extension];
        }
        return FALSE;
    }




    public function deshacerCambios($imagenes)
    {
        /* ------ SLIDER 1 ---- */

        @$imgs1 = $imagenes["uploadDataS1"]["file_name"];
        if ($imgs1 != null) {
            @unlink('./uploads/'.$imgs1);
        }

        @$imgs2 = $imagenes["uploadDataS2"]["file_name"];
        if ($imgs2 != null) {
            @unlink('./uploads/'.$imgs2);
        }

        @$imgs3 = $imagenes["uploadDataS3"]["file_name"];
        if ($imgs3 != null) {
            @unlink('./uploads/'.$imgs3);
        }

        return true;
    }

}