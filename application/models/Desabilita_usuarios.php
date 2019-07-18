<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');
class Desabilita_usuarios  extends CI_Model {

 public function __construct(){
    parent:: __construct();
    

}

public function derruba_geral()
{

  $muda_grupo = array(

     'groupname' => 'daloRADIUS-Disabled-Users' );

  $this->db->where('groupname', 'academico');
  $this->db->update('radusergroup', $muda_grupo);

  
  return 0;


}



}
