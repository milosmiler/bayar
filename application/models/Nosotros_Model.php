<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Nosotros_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }


    public function getAllProperties()
	{
		return $this->db->get("nosotros_page")->row();
	}


	public function insertAllProperties($dataTools, $dataup)
    {

    	$dd = $this->getAllProperties();


    	/* ------ SLIDER 1 ---- */

    	@$imgs1 = $dataup["uploadDataS1"]["file_name"];
    	if ($imgs1 == null) {
    		$imgs1 = $dd->s1_imagen1;
    	}
    	else {
    		if ($dd->s1_imagen1 != $imgs1) {
    			@unlink('./uploads/'.$dd->s1_imagen1);
    		}
    		
    	}

    	@$imgs2 = $dataup["uploadDataS2"]["file_name"];
    	if ($imgs2 == null) {
    		$imgs2 = $dd->s1_imagen2;
    	}
    	else {
    		if ($dd->s1_imagen2 != $imgs2) {
    			@unlink('./uploads/'.$dd->s1_imagen2);
    		}
    	}

    	@$imgs3 = $dataup["uploadDataS3"]["file_name"];
    	if ($imgs3 == null) {
    		$imgs3 = $dd->s1_imagen3;
    	}
    	else {
    		if ($dd->s1_imagen3 != $imgs3) {
    			@unlink('./uploads/'.$dd->s1_imagen3);
    		}
    	}

    	@$imgs4 = $dataup["uploadDataS4"]["file_name"];
    	if ($imgs4 == null) {
    		$imgs4 = $dd->s1_imagen4;
    	}
    	else {
    		if ($dd->s1_imagen4 != $imgs4) {
    			@unlink('./uploads/'.$dd->s1_imagen4);
    		}
    	}

    	@$imgs5 = $dataup["uploadDataS5"]["file_name"];
    	if ($imgs5 == null) {
    		$imgs5 = $dd->s1_imagen5;
    	}
    	else {
    		if ($dd->s1_imagen5 != $imgs5) {
    			@unlink('./uploads/'.$dd->s1_imagen5);
    		}
    	}


    	/* ------ SLIDER 2 ---- */


    	@$img1 = $dataup["uploadData1"]["file_name"];
    	if ($img1 == null) {
    		$img1 = $dd->url_img1;
    	}
    	else {
    		if ($dd->url_img1 != $img1) {
    			@unlink('./uploads/'.$dd->url_img1);
    		}
    	}

    	@$img2 = $dataup["uploadData2"]["file_name"];
    	if ($img2 == null) {
    		$img2 = $dd->url_img2;
    	}
    	else {
    		if ($dd->url_img2 != $img2) {
    			@unlink('./uploads/'.$dd->url_img2);
    		}
    	}

    	@$img3 = $dataup["uploadData3"]["file_name"];
    	if ($img3 == null) {
    		$img3 = $dd->url_img3;
    	}
    	else {
    		if ($dd->url_img3 != $img3) {
    			@unlink('./uploads/'.$dd->url_img3);
    		}
    	}

    	@$img4 = $dataup["uploadData4"]["file_name"];
    	if ($img4 == null) {
    		$img4 = $dd->url_img4;
    	}
    	else {
    		if ($dd->url_img4 != $img4) {
    			@unlink('./uploads/'.$dd->url_img4);
    		}
    	}

    	@$img5 = $dataup["uploadData5"]["file_name"];
    	if ($img5 == null) {
    		$img5 = $dd->url_img5;
    	}
    	else {
    		if ($dd->url_img5 != $img5) {
    			@unlink('./uploads/'.$dd->url_img5);
    		}
    	}


    	@$videoimg = $dataup["imagen_video"]["file_name"];
    	if ($videoimg == null) {
    		$videoimg = $dd->img_video;
    	}
    	else {
    		if ($dd->img_video != $videoimg) {
    			@unlink('./uploads/'.$dd->img_video);
    		}
    	}


    	@$video1 = $dataup["uploadData6"]["file_name"];
    	if ($video1 == null) {
    		$video1 = $dd->video;
    	}
    	else {
    		if ($dd->video != $video1) {
    			@unlink('./uploads/'.$dd->video);
    		}
    	}


        $data = [
            "texto_principal" => $dataTools["text-principal"],
            "s1_imagen1" => $imgs1,
            "s1_imagen2" => $imgs2,
            "s1_imagen3" => $imgs3,
            "s1_imagen4" => $imgs4,
            "s1_imagen5" => $imgs5,
            "url_img1" => $img1,
            "text_titulo1" => $dataTools["texto-titulo1"],
            "text_img1" => $dataTools["texto-slider1"],
            "url_img2" => $img2,
            "text_titulo2" => $dataTools["texto-titulo2"],
            "text_img2" => $dataTools["texto-slider2"],
            "url_img3" => $img3,
            "text_titulo3" => $dataTools["texto-titulo3"],
            "text_img3" => $dataTools["texto-slider3"],
            "url_img4" => $img4,
            "text_titulo4" => $dataTools["texto-titulo4"],
            "text_img4" => $dataTools["texto-slider4"],
            "url_img5" => $img5,
            "text_titulo5" => $dataTools["texto-titulo5"],
            "text_img5" => $dataTools["texto-slider5"],
            "titulo_p1" => $dataTools["texto1"],
            "titulo_p2" => $dataTools["texto2"],
            "texto_bold1" => $dataTools["texto3"],
            "texto_normal2" => $dataTools["texto4"],
            "texto" => $dataTools["texto5"],
            "img_video" => $videoimg,
            "video" => $video1,
        ];


        $this->db->set($data);
        $this->db->where("id", 1);
        $this->db->update("nosotros_page");


        if ( $this->db->affected_rows() != 1 ) {
        	if ( $this->db->error()["message"] != "" ) {
        		return false;
        	}
        	return true;
        }

        return true;
    }
}