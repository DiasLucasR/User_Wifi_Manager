<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
class Insere_radius_model extends CI_Model {


  public $nome;
  public $matricula;
  public $cpf;
  public $periodo;



  public function insere_atualiza_usuarios_banco($alunos_semestre_atual, $cod_semestre)
  {

            $giz = $this->load->database('giz', TRUE); // Cria conexão no banco para pesquisa de alunos
            $data = "".date('Y-m-d H:i:s');
            //$query_giz = array();
            //$query_giz = $dados_inserir_atualizar;
            $inserir_atualizar_db = array();
            $inserir_atualizar_db = $alunos_semestre_atual ;
            $count_atualizados = 0; 
            $count_inseridos = 0;

            foreach ($inserir_atualizar_db as $row){

              $queryRadius = $this->db->get_where('radcheck', array('username'=>$row->MATRICULA));


                if($queryRadius->num_rows() > 0){
      		$update_grupo_db = array(

                  'groupname' => 'academico',
                  'priority'  => '1'
                  );

		$this->db->where('username', $row->MATRICULA);
                $this->db->update('radusergroup', $update_grupo_db);

                $count_atualizados++;

              }
                 //Aqui insere pessoas que nao aparecem na pesquisa.
              else{
                $inserir_atualizar_db = array(

                 'firstname' =>  $row->NOME,
                 'username' =>$row->MATRICULA,
                 'changeuserinfo' => '0',
                 'creationdate' => $data,
                 'creationby' => 'appwifi',
                 'updatedate' => $data,
                 'updateby' => 'appwifi'
                 );
                $this->db->set($inserir_atualizar_db);
                $this->db->insert('userinfo');

                $inserir_grupo_db = array(

                  'username' => $row->MATRICULA,
                  'groupname' => 'academico',
                  'priority'  => '1'
                  );
                $this->db->set($inserir_grupo_db);
                $this->db->insert('radusergroup');
                    //$this->db->insert('radusergroup',$inserir_grupo_db);

                $inserir_senha_db = array(

                  'value' => substr($row->CPF, 0 , 6),
                  'username' => $row->MATRICULA,
                  'attribute' => 'User-Password',
                  'op'       => ':='
                  );
                $this->db->set($inserir_senha_db);
                $this->db->insert('radcheck');                         
                  // $info2 = $this->db->insert('radcheck',$inserir_senha_db);


                $userbillinfo_update = array(

                  'username' => $row->MATRICULA,
                  'creationdate' => $data,
                  'creationby' => 'appwifi'
                  );
                $this->db->set($userbillinfo_update);
                $this->db->insert('userbillinfo');
                  // $info3 = $this->db->set('userbillinfo',$userbillinfo_update);

	//	if($this->db->affected_rows()){
        //    return true;
       // } else {
       //     return false;
       // }	
                $count_inseridos++;

              }
            }



          // INSERE INFORMAÇÕES A EDIÇÃO NO BANCO
	    $usuario_que_inseriu = $this->session->userdata('login');
            $month = date(' d/m/Y');
            $controle = $this->load->database('controle', TRUE);
            $insere_banco_insert = array(
              'num_insert' => $count_inseridos,
              'num_update' => $count_atualizados,
              'date' => $month,
              'cod_semestre_insert' =>$cod_semestre,
              'grupo' => 'academico',
	      'usuario_inseriu' => $usuario_que_inseriu,
	      'tipo' => 'giz'
             );

            $controle->insert('inseridos', $insere_banco_insert);



            return 0;
          }

          public function get_usuarios_by_cod_semestre($cod_semestre){

            $giz = $this->load->database('giz', TRUE);
            $giz->save_queries = false;

            $retorno =  $giz->get_where('ALUNOSS', array('PLT_COD' => $cod_semestre))->result();



            return $retorno;
          }



        }


        ?>
