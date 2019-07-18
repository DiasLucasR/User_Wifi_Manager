<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');
class Insere_csv_model  extends CI_Model {

        //private $tabela = 'controle';

    public function __construct(){
        parent:: __construct();
        $this->load->helper('text');
        $this->load->model('Insere_csv_model');

    }

    public function desabilita_por_grupo($grupo){

        $muda_grupo = array(

            'groupname' => 'daloRADIUS-Disabled-Users' );

        $this->db->where('groupname', $grupo);
        $this->db->update('radusergroup', $muda_grupo);

        
        return 0;

        
    }
    
    public function insert_in_db_from_csv($dados_inserir_atualizar,$grupo_usu)
    {



        $count_atualizados_csv=0;
        $count_inseridos_csv=0;
        $data = "".date('Y-m-d H:i:s');
	
        foreach ($dados_inserir_atualizar as $row)
        {

            $row = (Object)$row;
          
            $usuario = $this->db->get_where('radcheck', array('username'=>$row->MATRICULA));


            if($usuario->num_rows() > 0){
            		
                $atualizar_grupo_db = array(
		
                 'groupname' => $grupo_usu,
                 'priority' => '1'
                 );

                $this->db->where('username', $row->MATRICULA);
                $this->db->update('radusergroup', $atualizar_grupo_db);

                $count_atualizados_csv++;

            }//AGORA INSERE AS PESSOAS QEU NÃO ESTÃO INSERIDAS AINDA.
            else{

                $inserir_atualizar_db = array(
                   'firstname' => $row->NOME,
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

                    'groupname' => $grupo_usu,
                    'username' => $row->MATRICULA,
                    'priority' => '1'
                    );
                $this->db->set($inserir_grupo_db);
                $this->db->insert('radusergroup');


                $inserir_senha_db = array(

                    'value'      => substr($row->CPF, 0 , 6),
                    'username'   => $row->MATRICULA,
                    'attribute' => 'User-Password',
                    'op'       => ':='
                    );
                $this->db->set($inserir_senha_db);
                $this->db->insert('radcheck');


                $userbillinfo_insert = array(

                    'username' => $row->MATRICULA,
                    'creationdate' => $data,
                    'creationby' => 'appwifi'
                    );

                $this->db->set($userbillinfo_insert);
                $this->db->insert('userbillinfo');




                $count_inseridos_csv++;

            }
        }



        //INSERE INFORMAÇÕES SOBRE EDIÇÃO NO BANCO
	$usuario_que_inseriu = $this->session->userdata('login');
	$month = date('d/m/Y');
        $controle = $this->load->database('controle', TRUE);
        $insere_banco_insert_csv = array(
          'num_insert' => $count_inseridos_csv,
          'num_update' => $count_atualizados_csv,
          'date' => $month,
          'grupo' => $grupo_usu,
          'usuario_inseriu' => $usuario_que_inseriu,
          'tipo' =>'csv' );
        
        $controle->insert('inseridos', $insere_banco_insert_csv);


        return 0;

    }

    public function insert_in_db_from_csv_bolsista($dados_inserir_atualizar,$grupo_usu)
    {



        $count_atualizados_csv=0;
        $count_inseridos_csv=0;
        $data = "".date('Y-m-d H:i:s');
        foreach ($dados_inserir_atualizar as $row)
        {

            $row = (Object)$row;

	 $usuario = $this->db->get_where('radcheck', array('username'=>$row->CPF));

            if($usuario->num_rows() > 0){
	
	       $atualizar_grupo_db = array(

                 'groupname' => $grupo_usu,
                 'priority' => '1'
                 );

                $this->db->where('username', $row->CPF);
                $this->db->update('radusergroup', $atualizar_grupo_db);

                $count_atualizados_csv++;

            }
            else{

                $inserir_atualizar_db = array(
                   'firstname' => $row->NOME,
                   'username' =>$row->CPF,
                   'changeuserinfo' => '0',
                   'creationdate' => $data,
                   'creationby' => 'appwifi',
                   'updatedate' => $data,
                   'updateby' => 'appwifi'
                   );

                $this->db->set($inserir_atualizar_db);
                $this->db->insert('userinfo');


                $inserir_grupo_db = array(

                    'groupname' => $grupo_usu,
                    'username' => $row->CPF,
                    'priority' => '1'
                    );
                $this->db->set($inserir_grupo_db);
                $this->db->insert('radusergroup');


                $inserir_senha_db = array(

                    'value'      => substr($row->CPF, 0 , 6),
                    'username'   => $row->CPF,
                    'attribute' => 'User-Password',
                    'op'       => ':='
                    );
                $this->db->set($inserir_senha_db);
                $this->db->insert('radcheck');
 

                $userbillinfo_insert = array(

                    'username' => $row->CPF,
                    'creationdate' => $data,
                    'creationby' => 'appwifi'
                    );

                $this->db->set($userbillinfo_insert);
                $this->db->insert('userbillinfo');
                 



                $count_inseridos_csv++;

            }
        }



               //INSERE INFORMAÇÕES SOBRE EDIÇÃO NO BANCO
        $month = date(' d/m/Y');
	$usuario_que_inseriu = $this->session->userdata('login');
        $controle = $this->load->database('controle', TRUE);
        $insere_banco_insert_bolsista_csv = array(
          'num_insert' => $count_inseridos_csv,
          'num_update' => $count_atualizados_csv,
          'date' => $month,
          'grupo' => $grupo_usu,
          'usuario_inseriu' => $usuario_que_inseriu,
          'tipo' =>'csv'

          );

        $controle->insert('inseridos', $insere_banco_insert_bolsista_csv);
        

        return 0;

    }



}





?>
