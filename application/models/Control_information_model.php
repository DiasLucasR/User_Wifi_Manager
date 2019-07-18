<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Control_information_model extends CI_Model {

        //private $tabela = 'controle';

        public function __construct(){
            parent:: __construct();
        }

	 public function pega_informacoes_insercao_update(){
            $controle = $this->load->database('controle', TRUE);
            $sql = $controle->get('inseridos');
            return $sql->result();
}

         
}
