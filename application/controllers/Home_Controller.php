<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_Controller extends CI_Controller {



	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->model('Insere_radius_model', 'model_insereradius');
		$this->load->model('Control_information_model', 'information_model');
		$this->load->model('Formata_csv_para_insercao', 'formata_csv');
		$this->load->model('Insere_csv_model', 'insere_csv');
		$this->load->model('Desabilita_usuarios', 'muda_grupo');
		$this->load->helper(array('form', 'url'));
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->helper('directory');
	}


	public function index()
	{	
		
		$this->load->view('templates/header');
		$this->load->view('insere/home');
		$this->load->view('nav/footer');


		

	}

	public function inserealunos()
	{
		
		$this->load->view('templates/header');
		$this->load->view('insere/insere_alunos');
		$this->load->view('nav/footer');




	}
	public function insereoutros()
	{
		$this->load->view('templates/header');
		$this->load->view('insere/insere_outros');
		$this->load->view('nav/footer');

		

	}
	public function help()
	{
		$this->load->view('templates/header');
		$this->load->view('ajuda/help');
		$this->load->view('nav/footer');

		
	}
	public function historico_view()
	{

		$dados = $this->information_model->pega_informacoes_insercao_update();
		
		$this->load->view('templates/header');
		$this->load->view('ajuda/historico_view',compact('dados'));
		$this->load->view('nav/footer');

		
	}
	public function insere_academicos()
	{
		$cod_semestre = $this->input->post('cod_semestre');
		if(isset($cod_semestre)){
			$alunos_semestre_atual = $this->model_insereradius->get_usuarios_by_cod_semestre($cod_semestre);
			$valores_pesquisa_radius = $this->model_insereradius->insere_atualiza_usuarios_banco($alunos_semestre_atual, $cod_semestre);
		}
		$this->session->set_flashdata('msg_inseriu_academicos', '<div class="alert alert-success container span7 text-center col-md-8 col-md-offset-2">Os usuário foram adicionados com sucesso</div>');
		$this->inserealunos();
	}

	public function desbilita_usuarios_alunos()
	{

    		$this->muda_grupo->derruba_geral();
		$this->session->set_flashdata('msg_derrubou', '<div class="alert alert-success container span7 text-center col-md-8 col-md-offset-2">Os alunos foram desativados!!!!<br>Insira código do periodo!!</div>');
		$this->inserealunos();



	}
	public function upload_arquivo_csv_geral()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'csv';
		
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('csv_insere')){
			$errordata = array('error' => $this->upload->display_errors());
                //print_r($errordata);
			$this->load->view('errorexcel',$errordata);
		}

		else{ 
			$dataexcel = array('csv_info' => $this->upload->data());
			$data =$dataexcel['csv_info']['file_name'];
			$valor_obtido_insercao_csv = $this->formata_csv->formata_array_para_inserir($data);
			$resultado_formata_csv = $this->formata_csv->escape_string($valor_obtido_insercao_csv);
			$grupo_usuarios_para_desabilitar = $this->input->post('grupo_usuarios');
			$this->insere_csv->desabilita_por_grupo($grupo_usuarios_para_desabilitar);

			$this->session->set_flashdata('msg_derrubou_outros', '<div class="alert alert-success container span7 text-center col-md-8 col-md-offset-2">Foram desativados!!!!</div>');
			if ($this->input->post('grupo_usuarios')=="bolsista")
			{
				$grupo_usu = $this->input->post('grupo_usuarios');
				$resultado_csv = $this->insere_csv->insert_in_db_from_csv_bolsista($resultado_formata_csv, $grupo_usu);
				$this->session->set_flashdata('msg_inserido_csv', '<div class="alert alert-success container span7 text-center col-md-8 col-md-offset-2">Foram Inseridos!!!!</div>');

				$this->insereoutros();

			}else
			{
				$grupo_usu = $this->input->post('grupo_usuarios');
				$resultado_csv = $this->insere_csv->insert_in_db_from_csv($resultado_formata_csv, $grupo_usu);
				$this->session->set_flashdata('msg_inserido_csv', '<div class="alert alert-success container span7 text-center col-md-8 col-md-offset-2">Foram Inseridos!!!!</div>');
				$this->insereoutros();

			}


		}


	}
}

