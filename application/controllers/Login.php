<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('User_Model','user_model');
    }

    public function index() {
     
        $email = $this->input->post("username");
        $password = $this->input->post("password");
        
        // form validation
        $this->form_validation->set_rules(
            "username", "Digite o Login!!", "trim|required",
            array('required' => 'O campo Email é Obrigatório'));
        $this->form_validation->set_rules(
            "password", "Digite a senha!!", "trim|required",
            array('required' => 'O campo Senha é Obrigatório'));
        
        if ($this->form_validation->run() == FALSE) {
            // validation fail
            $this->load->view('login_view');
        } else {
            // var_dump($email);
            // die();
            // check for user credentials
            $uresult = $this->user_model->get_user($email, $password);
            
            
            if (count($uresult) > 0) {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->firstname." ".$uresult[0]->lastname, 'uid' => $uresult[0]->id,'login' =>$uresult[0]->username);
                $this->session->set_userdata($sess_data);
                redirect("profile/index");
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Erroooooooou!!!!</div>');
                redirect('login/index');
            }
        }
    }

}
