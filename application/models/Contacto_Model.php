<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Contacto_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }


    public function getAllProperties()
	{
		return $this->db->get("contacto_page")->row();
	}


	public function insertAllProperties($dataTools, $dataup)
    {

    	$dd = $this->getAllProperties();

    	/* ------ SLIDER 1 ---- */

    	@$imgs1 = $dataup["uploadDataS1"]["file_name"];
    	if ($imgs1 == null) {
    		$imgs1 = $dd->imagen1;
    	}
    	else {
    		if ($dd->imagen1 != $imgs1) {
    			@unlink('./uploads/'.$dd->imagen1);
    		}
    		
    	}

    	@$imgs2 = $dataup["uploadDataS2"]["file_name"];
    	if ($imgs2 == null) {
    		$imgs2 = $dd->imagen2;
    	}
    	else {
    		if ($dd->imagen2 != $imgs2) {
    			@unlink('./uploads/'.$dd->imagen2);
    		}
    	}

    	@$imgs3 = $dataup["uploadDataS3"]["file_name"];
    	if ($imgs3 == null) {
    		$imgs3 = $dd->imagen3;
    	}
    	else {
    		if ($dd->imagen3 != $imgs3) {
    			@unlink('./uploads/'.$dd->imagen3);
    		}
    	}


        $data = [
            "direccion_parte1" => $dataTools["direccion1"],
            "direccion_parte2" => $dataTools["direccion2"],
            "telefono_contacto" => $dataTools["telefono"],
            "email_contacto" => $dataTools["email"],
            "imagen1" => $imgs1,
            "imagen2" => $imgs2,
            "imagen3" => $imgs3,
        ];


        $this->db->set($data);
        $this->db->where("id", 1);
        $this->db->update("contacto_page");


        if ( $this->db->affected_rows() != 1 ) {
        	if ( $this->db->error()["message"] != "" ) {
        		return false;
        	}
        	return true;
        }

        return true;
    }

}