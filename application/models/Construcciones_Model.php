<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Construcciones_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getAllProperties()
	{
		return $this->db->get("construcciones");
	}

    public function getAllPropertiesOnly($slug)
    {
        return $this->db->get_where("construcciones", array("slug" => $slug))->row();
    }


    public function insertAllProperties($dataTools, $dataup)
    {

        date_default_timezone_set('America/Mexico_City');
        $date = date('Y-m-d h:i:s', time());

        $data = [
            "titulo" => $dataTools["titulo"],
            "descripcion" => $dataTools["descripcion"],
            "imagen1" => $dataup["uploadDataS1"]["file_name"],
            "imagen2" => $dataup["uploadDataS2"]["file_name"],
            "descripcion2" => $dataTools["titulo2"],
            "imagen3" => $dataup["uploadDataS3"]["file_name"],
            "descripcion3" => $dataTools["descripcion2"],
            "imagen4" => $dataup["uploadDataS4"]["file_name"],
            "video" => $dataTools["url_video"],
            "create_at" => $date
        ];


        $this->db->insert('construcciones', $data);
        $ultimoId = $this->db->insert_id();


        if ( $this->db->affected_rows() != 1 ) {
            if ( $this->db->error()["message"] != "" ) {
                return false;
            }

            return false;
        }

        //update slug
        $slug = $this->createSlug($dataTools["titulo"], $ultimoId);

        $this->db->set(["slug" => $slug]);
        $this->db->where("const_id", $ultimoId);
        $this->db->update("construcciones");

        return ( $this->db->affected_rows() != 1 ) ? false : true;
    }



    public function updateAllProperties($dataTools, $dataup, $slug)
    {
        $dd = $this->getAllPropertiesOnly($slug);


        date_default_timezone_set('America/Mexico_City');
        $date = date('Y-m-d h:i:s', time());

        /* ------ SLIDER 1 ---- */

        @$imgs1 = $dataup["uploadDataS1"]["file_name"];
        if ($imgs1 == null) {
            $imgs1 = $dd->imagen1;
        }
        else {
            if ($dd->imagen1 != $imgs1) {
                @unlink('./uploads/post/construcciones/'.$dd->imagen1);
            }
            
        }

        @$imgs2 = $dataup["uploadDataS2"]["file_name"];
        if ($imgs2 == null) {
            $imgs2 = $dd->imagen2;
        }
        else {
            if ($dd->imagen2 != $imgs2) {
                @unlink('./uploads/post/construcciones/'.$dd->imagen2);
            }
        }

        @$imgs3 = $dataup["uploadDataS3"]["file_name"];
        if ($imgs3 == null) {
            $imgs3 = $dd->imagen3;
        }
        else {
            if ($dd->imagen3 != $imgs3) {
                @unlink('./uploads/post/construcciones/'.$dd->imagen3);
            }
        }


        @$imgs4 = $dataup["uploadDataS4"]["file_name"];
        if ($imgs4 == null) {
            $imgs4 = $dd->imagen4;
        }
        else {
            if ($dd->imagen4 != $imgs4) {
                @unlink('./uploads/post/construcciones/'.$dd->imagen4);
            }
        }


        $slug = $this->createSlug($dataTools["titulo"], $dd->const_id);


        $data = [
            "slug" => $slug,
            "titulo" => $dataTools["titulo"],
            "descripcion" => $dataTools["descripcion"],
            "imagen1" => $imgs1,
            "imagen2" => $imgs2,
            "descripcion2" => $dataTools["titulo2"],
            "imagen3" => $imgs3,
            "descripcion3" => $dataTools["descripcion2"],
            "imagen4" => $imgs4,
            "video" => $dataTools["url_video"],
            "create_at" => $date
        ];


        $this->db->set($data);
        $this->db->where("const_id", $dd->const_id);
        $this->db->update("construcciones");


        if ( $this->db->affected_rows() != 1 ) {
            if ( $this->db->error()["message"] != "" ) {
                return false;
            }
            return $slug;
        }

        return $slug;
    }


    public function createSlug($string, $id)
    {
        $name = $string;
        $str = strtolower($name);
        $slug = preg_replace('/\s+/', '-', $str);
        return "MLM-".base64_encode($id)."-".$slug;
    }


    public function validateDataPost($slug, $cat) 
    {
        if ($cat == "evento") {

            $query = $this->db->get_where('eventos', array('slug' => $slug));
            $result = $query->row();

            if ( isset($result) ) {
                return $result;
            }

            return false;
        }
        else if ($cat == "activacion") {

            $query = $this->db->get_where('activaciones', array('slug' => $slug));
            $result = $query->row();

            if ( isset($result) ) {
                return $result;
            }

            return false;
        }
        else if ($cat == "construccion") {

            $query = $this->db->get_where('construcciones', array('slug' => $slug));
            $result = $query->row();

            if ( isset($result) ) {
                return $result;
            }

            return false;
        }
        
        

        return false;
    }

}