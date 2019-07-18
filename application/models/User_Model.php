<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model 
{
    public function __construct() {
        parent::__construct();
    }

    public function get_user($email, $pwd) {
        $this->db->where('username', $email);
        $this->db->where('password', ($pwd));
        $query = $this->db->get('operators');
        return $query->result();
    }

    public function get_user_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('operators');
        return $query->result();
    }

    public function insert_user($data) {
        return $this->db->insert('user', $data);
    }

}
