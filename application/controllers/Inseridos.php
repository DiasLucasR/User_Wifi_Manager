<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Inseridos extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Insere_alunos_model');
			 $this->load->library('session');

		}


		public function inseridos()
		{
			
			$this->load->view('result/inseridos');
			

		}

?>