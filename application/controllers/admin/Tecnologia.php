<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnologia extends CI_Controller {

    public function __construct()
    {
        return parent::__construct();
    }


    public function listado_tecnologia()
    {
        $this->load->library('session');
        $this->load->helper('form');

        $this->load->model("Tecnologia_Model", "tecnologia");

        if (!$this->session->userdata('id')) {
            return redirect(base_url("admin"));
        }

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "tecnologia";
        $data["datos"] = $this->tecnologia->getAllProperties();

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/listado_tecnologia");
        $this->load->view("admin/layouts/footer");
    }


    public function crear_tecnologia()
    {
        $this->load->library('session');
        $this->load->helper('form');

        //validar si existe una sesion de usuario
        if (!$this->session->userdata('id')) {
            return redirect(base_url("admin"));
        }

        if ($this->input->post("submit") && $_POST) {
            return $this->post_create();
        }

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "tecnologia";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/crear_tecnologia");
        $this->load->view("admin/layouts/footer");
    }


    public function editar_tecnologia($slug)
    {
        $this->load->library('session');
        $this->load->helper('form');

        //validar si existe una sesion de usuario
        if (!$this->session->userdata('id')) {
            return redirect(base_url("admin"));
        }

        if ($this->input->post("submit") && $_POST) {

            $this->load->model("Tecnologia_Model", "tecnologia");
            $datos = $this->tecnologia->validateDataPost($slug, "tecnologia");

            if (!$datos) {
                $data["message"] = " The page you requested was not found. ";
                $data["heading"] = " 404 Page Not Found ";
                return $this->load->view("errors/html/error_404", $data);
            }

            return $this->post_editar($slug);
        }

        $this->load->model("Tecnologia_Model", "tecnologia");
        $datos = $this->tecnologia->validateDataPost($slug, "tecnologia");

        if (!$datos) {
            $data["message"] = " The page you requested was not found. ";
            $data["heading"] = " 404 Page Not Found ";
            return $this->load->view("errors/html/error_404", $data);
        }

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "tecnologia";
        $data["datos"] = $datos;

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/editar_tecnologia");
        $this->load->view("admin/layouts/footer");
    }


    public function post_editar($slug)
    {
        $this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('titulo', '', 'trim|required|xss_clean');
        $this->form_validation->set_rules('descripcion', '', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen1', 'Imagen', 'callback_file_check_img[s_imagen1]');
        $this->form_validation->set_rules('s_imagen2', 'Background', 'callback_file_check_img[s_imagen2]');

        $this->form_validation->set_rules('titulo2', 'Titulo', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen3', 'Imagen de Descripcion', 'callback_file_check_img[s_imagen3]');
        $this->form_validation->set_rules('descripcion2', 'Descripcion', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen4', 'Imagen de Video', 'callback_file_check_img[s_imagen4]');
        $this->form_validation->set_rules('url_video', '', 'trim|required|xss_clean');


        //emensajes
        $this->form_validation->set_message("required", "El campo es requerido");
        $this->form_validation->set_message("xss_clean", "El campo no es valido xss");
        $this->form_validation->set_message("valid_email", "El campo no es valido");


        //Model
       $this->load->model("Tecnologia_Model", "tecnologia");


        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
            $data["menu"] = "tecnologia";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/editar_construcciones");
            $this->load->view("admin/layouts/footer");
            return false;
        }


         //upload configuration
        $config['upload_path']   = './uploads/post/tecnologia';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|mpeg|mp4|avi|wmv';
        $config['max_size']      = 50024;
        $this->load->library('upload', $config);
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
                $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/editar_tecnologia");
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
                $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/editar_tecnologia");
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
                $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/editar_tecnologia");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }


        //upload file to directory
        if (isset($_FILES["s_imagen4"]['name']) && $_FILES["s_imagen4"]['name']!="") {
            if ($this->upload->do_upload("s_imagen4")) {
                $dataup["uploadDataS4"] = $this->upload->data();
            }
            else {
                $this->deshacerCambios($dataup);
                $data['error_update'] = $this->upload->display_errors();

                //vista
                $data["nombre_admin"] = $this->session->userdata('nombre');
                $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/editar_tecnologia");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }


        //Obteniendo todos los campos
        $data = $this->input->post();

        //actualizar datos
        if (!$slres = $this->tecnologia->updateAllProperties($data, $dataup, $slug)) {
            $this->deshacerCambios($dataup);
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";
        }
        else {
             $data["success"] = "Se actualizaron los datos correctamente";
        }

        if ($slres != $slug) {
            $this->session->set_flashdata('success', 'Se actualizaron los datos correctamente');
            redirect(base_url("admin/proyectos/tecnologia/editar/".$slres));
            return false;
        }

        //vista
        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["datos"] = $this->tecnologia->getAllPropertiesOnly($slug);
        $data["menu"] = "tecnologia";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/editar_tecnologia");
        $this->load->view("admin/layouts/footer");

    }


    public function post_create()
    {
        $this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('titulo', '', 'trim|required|xss_clean');
        $this->form_validation->set_rules('descripcion', '', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen1', 'Imagen', 'callback_file_check[s_imagen1]');
        $this->form_validation->set_rules('s_imagen2', 'Background', 'callback_file_check[s_imagen2]');

        $this->form_validation->set_rules('titulo2', 'Titulo', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen3', 'Imagen de Descripcion', 'callback_file_check[s_imagen3]');
        $this->form_validation->set_rules('descripcion2', 'Descripcion', 'trim|required|xss_clean');
        $this->form_validation->set_rules('s_imagen4', 'Imagen de Video', 'callback_file_check[s_imagen4]');
        $this->form_validation->set_rules('url_video', '', 'trim|required|xss_clean');


        //emensajes
        $this->form_validation->set_message("required", "El campo es requerido");
        $this->form_validation->set_message("xss_clean", "El campo no es valido xss");
        $this->form_validation->set_message("valid_email", "El campo no es valido");


        //Model
        $this->load->model("Tecnologia_Model", "tecnologia");


        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            //$data["datos"] = $this->contacto->getAllProperties();
            $data["menu"] = "tecnologia";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/crear_tecnologia");
            $this->load->view("admin/layouts/footer");
            return false;
        }



        //upload configuration
        $config['upload_path']   = './uploads/post/tecnologia';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|mpeg|mp4|avi|wmv';
        $config['max_size']      = 50024;
        $this->load->library('upload', $config);
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
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/crear_tecnologia");
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
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/crear_tecnologia");
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
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/crear_tecnologia");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }


        //upload file to directory
        if (isset($_FILES["s_imagen4"]['name']) && $_FILES["s_imagen4"]['name']!="") {
            if ($this->upload->do_upload("s_imagen4")) {
                $dataup["uploadDataS4"] = $this->upload->data();
            }
            else {
                $this->deshacerCambios($dataup);
                $data['error_update'] = $this->upload->display_errors();

                //vista
                $data["nombre_admin"] = $this->session->userdata('nombre');
                $data["menu"] = "tecnologia";

                $this->load->view("admin/layouts/header", $data);
                $this->load->view("admin/crear_tecnologia");
                $this->load->view("admin/layouts/footer");
                return false;
            }
        }


        //Obteniendo todos los campos
        $data = $this->input->post();

        //actualizar datos
        if (!$this->tecnologia->insertAllProperties($data, $dataup)) {
            $this->deshacerCambios($dataup);
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";

            //vista
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["menu"] = "tecnologia";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/crear_tecnologia");
            $this->load->view("admin/layouts/footer");

        }
        else {
            $this->session->set_flashdata('success', 'Se actualizaron los datos correctamente');
            redirect(base_url("admin/proyectos/tecnologia/listado"));
        }
    }



    //IMAGENES
    function file_check_img($str, $str2) {
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = $this->get_mime_by_extension($_FILES[$str2]['name']);
        if(isset($_FILES[$str2]['name']) && $_FILES[$str2]['name']!="") {
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check_img', 'Porfavor selecciona solo archivos gif/jpg/png');
                return false;
            }
        }
    }


    //IMAGENES
    function file_check($str, $str2) {
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = $this->get_mime_by_extension($_FILES[$str2]['name']);
        if(isset($_FILES[$str2]['name']) && $_FILES[$str2]['name']!="") {
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Porfavor selecciona solo archivos gif/jpg/png');
                return false;
            }
        }
        else {
            $this->form_validation->set_message('file_check', 'El campo es requerido');
            return false;
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
            @unlink('./uploads/post/construcciones/'.$imgs1);
        }

        @$imgs2 = $imagenes["uploadDataS2"]["file_name"];
        if ($imgs2 != null) {
            @unlink('./uploads/post/construcciones/'.$imgs2);
        }

        @$imgs3 = $imagenes["uploadDataS3"]["file_name"];
        if ($imgs3 != null) {
            @unlink('./uploads/post/construcciones/'.$imgs3);
        }

        @$imgs4 = $imagenes["uploadDataS4"]["file_name"];
        if ($imgs4 != null) {
            @unlink('./uploads/post/construcciones/'.$imgs4);
        }

        return true;
    }


}