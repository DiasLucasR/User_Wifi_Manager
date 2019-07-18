<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library('session');
        $this->load->database();
        $this->load->model('User_Model','user_model');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/footer');

        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $data['uname'] = $details[0]->firstname . " " . $details[0]->lastname;
        $data['uemail'] = $details[0]->username;
        
        $this->load->view('insere/home', $data);
    }
}
