<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Proyect_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getAllProperties()
	{
		return $this->db->get("proyectos_page")->row();
	}


    public function insertAllProperties($dataTools)
    {
        $data = [
            "texto_principal" => $dataTools["text-principal"],
            "item1_titulo" => $dataTools["item1-titulo"],
            "item1_text_bold" => $dataTools["texto1-bold"],
            "item1_text" => $dataTools["texto1"],
            "item2_titulo" => $dataTools["item2-titulo"],
            "item2_text_bold" => $dataTools["texto2-bold"],
            "item2_text" => $dataTools["texto2"],
            "item3_titulo" => $dataTools["item3-titulo"],
            "item3_text_bold" => $dataTools["texto3-bold"],
            "item3_text" => $dataTools["texto3"],
            "item4_titulo" => $dataTools["item4-titulo"],
            "item4_text_bold" => $dataTools["texto4-bold"],
            "item4_text" => $dataTools["texto4"],
            "item5_titulo" => $dataTools["item5-titulo"],
            "item5_text_bold" => $dataTools["texto5-bold"],
            "item5_text" => $dataTools["texto5"],
        ];


        $this->db->set($data);
        $this->db->where("id", 1);
        $this->db->update("proyectos_page");

        if ( $this->db->affected_rows() != 1 ) {
            if ( $this->db->error()["message"] != "" ) {
                return false;
            }
            return true;
        }

        return true;
    }

}