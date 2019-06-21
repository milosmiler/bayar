<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

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

        $this->load->model("Nosotros_Model", "nosotros");

        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["menu"] = "pagina_nosotros";
        $data["datos"] = $this->nosotros->getAllProperties();

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_nosotros");
        $this->load->view("admin/layouts/footer");
    }


    public function saveDataTools()
    {
    	$this->load->library('form_validation');
        $this->load->helper("security");

        //campos
        $this->form_validation->set_rules('text-principal', 'Texto Principal', 'trim|required|xss_clean');

        $this->form_validation->set_rules('s1_imagen1', '', 'callback_file_check[s1_imagen1]');
        $this->form_validation->set_rules('s1_imagen2', '', 'callback_file_check[s1_imagen2]');
        $this->form_validation->set_rules('s1_imagen3', '', 'callback_file_check[s1_imagen3]');
        $this->form_validation->set_rules('s1_imagen4', '', 'callback_file_check[s1_imagen4]');
        $this->form_validation->set_rules('s1_imagen5', '', 'callback_file_check[s1_imagen5]');



        $this->form_validation->set_rules('imagen1', '', 'callback_file_check[imagen1]');
        $this->form_validation->set_rules('texto-titulo1', 'Tiutulo 1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto-slider1', '1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('imagen2', '', 'callback_file_check[imagen2]');
        $this->form_validation->set_rules('texto-titulo2', 'Tiutulo 2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto-slider2', '2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('imagen3', '', 'callback_file_check[imagen3]');
        $this->form_validation->set_rules('texto-titulo3', 'Tiutulo 3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto-slider3', '3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('imagen4', '', 'callback_file_check[imagen4]');
        $this->form_validation->set_rules('texto-titulo4', 'Tiutulo 4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto-slider4', '4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('imagen5', '', 'callback_file_check[imagen5]');
        $this->form_validation->set_rules('texto-titulo5', 'Tiutulo 5', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto-slider5', '5', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto1', '1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto2', '2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto3', '3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto4', '4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('texto5', '5', 'trim|required|xss_clean');
        $this->form_validation->set_rules('imagen_video', 'Imagen para video', 'callback_file_check[imagen_video]');
        $this->form_validation->set_rules('video1', '', 'callback_file_check_video[video1]');

        //emensajes
        $this->form_validation->set_message("required", "El campo %s es requerido");
        $this->form_validation->set_message("xss_clean", "El campo %s no es valido xss");
        // $this->form_validation->set_message("min_length", "El minimo de caracteres son 6");
        // $this->form_validation->set_message("max_length", "El maximo de caracteres son 255");


        //Model
        $this->load->model("Nosotros_Model", "nosotros");

        if ($this->form_validation->run() == false) {
            $data["nombre_admin"] = $this->session->userdata('nombre');
            $data["datos"] = $this->nosotros->getAllProperties();
            $data["menu"] = "pagina_nosotros";

            $this->load->view("admin/layouts/header", $data);
            $this->load->view("admin/pagina_nosotros");
            $this->load->view("admin/layouts/footer");
            return false;
        }


        //upload configuration
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|mpeg|mp4|avi|wmv';
        $config['max_size']      = 50024;
        $this->load->library('upload', $config);
        $dataold = $this->nosotros->getAllProperties();
        $dataup = null;



        /* ------ SLIDER 1 ---- */

        //upload file to directory
        if (isset($_FILES["s1_imagen1"]['name']) && $_FILES["s1_imagen1"]['name']!="") {
        	if ($this->upload->do_upload("s1_imagen1")) {
	        	$dataup["uploadDataS1"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }


        //upload file to directory
        if (isset($_FILES["s1_imagen2"]['name']) && $_FILES["s1_imagen2"]['name']!="") {
        	if ($this->upload->do_upload("s1_imagen2")) {
	        	$dataup["uploadDataS2"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }


        //upload file to directory
        if (isset($_FILES["s1_imagen3"]['name']) && $_FILES["s1_imagen3"]['name']!="") {
        	if ($this->upload->do_upload("s1_imagen3")) {
	        	$dataup["uploadDataS3"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }


        //upload file to directory
        if (isset($_FILES["s1_imagen4"]['name']) && $_FILES["s1_imagen4"]['name']!="") {
        	if ($this->upload->do_upload("s1_imagen4")) {
	        	$dataup["uploadDataS4"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }


        //upload file to directory
        if (isset($_FILES["s1_imagen5"]['name']) && $_FILES["s1_imagen5"]['name']!="") {
        	if ($this->upload->do_upload("s1_imagen5")) {
	        	$dataup["uploadDataS5"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }




       /* ------ SLIDER 2 ---- */

        //upload file to directory
        if (isset($_FILES["imagen1"]['name']) && $_FILES["imagen1"]['name']!="") {
        	if ($this->upload->do_upload("imagen1")) {
	        	$dataup["uploadData1"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
        }
        

         //upload file to directory
        if (isset($_FILES["imagen2"]['name']) && $_FILES["imagen2"]['name']!="") {
	        if ($this->upload->do_upload("imagen2")) {
	        	$dataup["uploadData2"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }
        
	     //upload file to directory
        if (isset($_FILES["imagen3"]['name']) && $_FILES["imagen3"]['name']!="") {
	        if ($this->upload->do_upload("imagen3")) {
	        	$dataup["uploadData3"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }

	     //upload file to directory
        if (isset($_FILES["imagen4"]['name']) && $_FILES["imagen4"]['name']!="") {
	        if ($this->upload->do_upload("imagen4")) {
	        	$dataup["uploadData4"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }

	     //upload file to directory
        if (isset($_FILES["imagen5"]['name']) && $_FILES["imagen5"]['name']!="") {
	        if ($this->upload->do_upload("imagen5")) {
	        	$dataup["uploadData5"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }


	    //upload file to directory
        if (isset($_FILES["imagen_video"]['name']) && $_FILES["imagen_video"]['name']!="") {
	        if ($this->upload->do_upload("imagen_video")) {
	        	$dataup["imagen_video"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }


	    //upload file to directory
        if (isset($_FILES["video1"]['name']) && $_FILES["video1"]['name']!="") {
	        if ($this->upload->do_upload("video1")) {
	        	$dataup["uploadData6"] = $this->upload->data();
	        }
	        else {
	        	$this->deshacerCambios($dataup);
	        	$data['error_update'] = $this->upload->display_errors();

	            //vista
	            $data["nombre_admin"] = $this->session->userdata('nombre');
		        $data["datos"] = $this->nosotros->getAllProperties();
		        $data["menu"] = "pagina_nosotros";

		        $this->load->view("admin/layouts/header", $data);
		        $this->load->view("admin/pagina_nosotros");
		        $this->load->view("admin/layouts/footer");
		        return false;
	        }
	    }


    
        //Obteniendo todos los campos
    	$data = $this->input->post();

    	//actualizar datos
        if (!$this->nosotros->insertAllProperties($data, $dataup)) {
        	$this->deshacerCambios($dataup);
            $data["error_update"] = "No se pudo actualizar la base de datos, intentelo más tarde";
        }
        else {
             $data["success"] = "Se actualizaron los datos correctamente";
        }

        //vista
        $data["nombre_admin"] = $this->session->userdata('nombre');
        $data["datos"] = $this->nosotros->getAllProperties();
        $data["menu"] = "pagina_nosotros";

        $this->load->view("admin/layouts/header", $data);
        $this->load->view("admin/pagina_nosotros");
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

    //VIDEO
    function file_check_video($str, $str2) {
    	$allowed_mime_type_arr = array('video/mp4','video/mpeg','video/quicktime','video/avi','video/x-ms-wmv');
        $mime = $this->get_mime_by_extension($_FILES[$str2]['name']);
        if(isset($_FILES[$str2]['name']) && $_FILES[$str2]['name']!="") {
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only mpeg/mp4/msvideo/quicktime file.');
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

    	@$imgs4 = $imagenes["uploadDataS4"]["file_name"];
		if ($imgs4 != null) {
    		@unlink('./uploads/'.$imgs4);
    	}

    	@$imgs5 = $imagenes["uploadDataS5"]["file_name"];
		if ($imgs5 != null) {
    		@unlink('./uploads/'.$imgs5);
    	}

    	/* ------ SLIDER 2 ---- */

		@$img1 = $imagenes["uploadData1"]["file_name"];
    	if ($img1 != null) {
    		@unlink('./uploads/'.$img1);
    	}

    	@$img2 = $imagenes["uploadData2"]["file_name"];
    	if ($img2 != null) {
    		@unlink('./uploads/'.$img2);
    	}

    	@$img3 = $imagenes["uploadData3"]["file_name"];
    	if ($img3 != null) {
    		@unlink('./uploads/'.$img3);
    	}

    	@$img4 = $imagenes["uploadData4"]["file_name"];
    	if ($img4 != null) {
    		@unlink('./uploads/'.$img4);
    	}

    	@$img5 = $imagenes["uploadData5"]["file_name"];
    	if ($img5 != null) {
    		@unlink('./uploads/'.$img5);
    	}

    	@$imgvideo = $imagenes["imagen_video"]["file_name"];
    	if ($imgvideo != null) {
    		@unlink('./uploads/'.$imgvideo);
    	}


    	@$video1 = $imagenes["uploadData6"]["file_name"];
    	if ($video1 != null) {
    		@unlink('./uploads/'.$video1);
    	}

    	return true;
	}



}