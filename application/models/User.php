<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getUsers()
	{
		return $this->db->get("users");
	}

	public function auth($data)
    {
    	$query = $this->db->get_where('users', array('email' => $data['email']));
        $result = $query->row();

        if ( isset($result) ) {
            return $result;
        }

        return false;
    }
}