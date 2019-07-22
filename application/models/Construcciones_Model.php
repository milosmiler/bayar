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

    public function getAllPropertiestwo()
    {
        return $this->db->get("construcciones")->row();
    }

    public function getAllPropertiesOnly($slug)
    {
        return $this->db->get_where("construcciones", array("slug" => $slug))->row();
    }


    public function eliminarEvent($slug)
    {
        $this->db->where('slug', $slug);
        $this->db->delete('construcciones');

        return ( $this->db->affected_rows() != 1 ) ? false : true;
    }


    public function insertAllProperties($dataTools, $dataup)
    {

        date_default_timezone_set('America/Mexico_City');
        $date = date('Y-m-d h:i:s', time());

        if (@$dataup["uploadDataS4"] ==  null) {
            $file4 = "null";
        }
        else {
            $file4 = $dataup["uploadDataS4"]["file_name"];
        }



        if (@$dataup["uploadDataSD1"] ==  null) {
            $imgsd1 = "null";
        }
        else {
            $imgsd1 = $dataup["uploadDataSD1"]["file_name"];
        }

        if (@$dataup["uploadDataSD2"] ==  null) {
            $imgsd2 = "null";
        }
        else {
            $imgsd2 = $dataup["uploadDataSD2"]["file_name"];
        }

        if (@$dataup["uploadDataSD3"] ==  null) {
            $imgsd3 = "null";
        }
        else {
            $imgsd3 = $dataup["uploadDataSD3"]["file_name"];
        }

        if (@$dataup["uploadDataSD4"] ==  null) {
            $imgsd4 = "null";
        }
        else {
            $imgsd4 = $dataup["uploadDataSD4"]["file_name"];
        }


        if (@$dataup["uploadDataSD5"] ==  null) {
            $imgsd5 = "null";
        }
        else {
            $imgsd5 = $dataup["uploadDataSD5"]["file_name"];
        }


        if (@ $dataup["uploadDataS2"] ==  null) {
            $img2 = "null";
        }
        else {
            $img2 = $dataup["uploadDataS2"]["file_name"];
        }
        

        $data = [
            "titulo" => $dataTools["titulo"],
            "titulop2" => $dataTools["titulop2"],
            "descripcion" => $dataTools["descripcion"],
            "imagen1" => $dataup["uploadDataS1"]["file_name"],
            "imagen2" => $img2,
            "header_color" => $dataTools["header_color"],
            "descripcion2" => $dataTools["titulo2"],
            "imagen3" => $dataup["uploadDataS3"]["file_name"],
            "imagend1" => $imgsd1,
            "imagend2" => $imgsd2,
            "imagend3" => $imgsd3,
            "imagend4" => $imgsd4,
            "imagend5" => $imgsd5,
            "descripcion3" => $dataTools["descripcion2"],
            "imagen4" => $file4,
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




        @$imgsd1 = $dataup["uploadDataSD1"]["file_name"];
        if ($imgsd1 == null) {
            $imgsd1 = $dd->imagend1;
        }
        else {
            if ($dd->imagend1 != $imgsd1) {
                @unlink('./uploads/post/eventos/'.$dd->imagend1);
            }
        }


        @$imgsd2 = $dataup["uploadDataSD2"]["file_name"];
        if ($imgsd2 == null) {
            $imgsd2 = $dd->imagend2;
        }
        else {
            if ($dd->imagend2 != $imgsd2) {
                @unlink('./uploads/post/eventos/'.$dd->imagend2);
            }
        }


        @$imgsd3 = $dataup["uploadDataSD3"]["file_name"];
        if ($imgsd3 == null) {
            $imgsd3 = $dd->imagend3;
        }
        else {
            if ($dd->imagend3 != $imgsd3) {
                @unlink('./uploads/post/eventos/'.$dd->imagend3);
            }
        }

        @$imgsd4 = $dataup["uploadDataSD4"]["file_name"];
        if ($imgsd4 == null) {
            $imgsd4 = $dd->imagend4;
        }
        else {
            if ($dd->imagend4 != $imgsd4) {
                @unlink('./uploads/post/eventos/'.$dd->imagend4);
            }
        }


        @$imgsd5 = $dataup["uploadDataSD5"]["file_name"];
        if ($imgsd5 == null) {
            $imgsd5 = $dd->imagend5;
        }
        else {
            if ($dd->imagend5 != $imgsd5) {
                @unlink('./uploads/post/eventos/'.$dd->imagend5);
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
            "titulop2" => $dataTools["titulop2"],
            "descripcion" => $dataTools["descripcion"],
            "imagen1" => $imgs1,
            "imagen2" => $imgs2,
            "header_color" => $dataTools["header_color"],
            "descripcion2" => $dataTools["titulo2"],
            "imagen3" => $imgs3,
            "imagend1" => $imgsd1,
            "imagend2" => $imgsd2,
            "imagend3" => $imgsd3,
            "imagend4" => $imgsd4,
            "imagend5" => $imgsd5,
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
        $name = $this->sanear_string($string);
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




    function sanear_string($string)
    {
     
        $string = trim($string);
     
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
     
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
     
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
     
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
     
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
     
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
     
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array(
                 "#", "@", "|", "!",
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "<code>", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "< ", ";", ",", ":",
                 ".", " "),
            '',
            $string
        );
     
     
        return $string;
    }

}