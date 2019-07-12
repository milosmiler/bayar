<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Aviso_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getAllProperties()
    {
        return $this->db->get("aviso")->row();
    }


    public function insertAllProperties($dataTools)
    {
        $data = [
            "texto" => $dataTools["aviso1"],
            "texto_vista" => $dataTools["aviso_cueron"]
        ];


        $this->db->set($data);
        $this->db->where("id", 1);
        $this->db->update("aviso");

        if ( $this->db->affected_rows() != 1 ) {
            if ( $this->db->error()["message"] != "" ) {
                return false;
            }
            return true;
        }

        return true;
    }
}