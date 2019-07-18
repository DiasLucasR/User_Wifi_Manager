
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Formata_csv_para_insercao {

    var $fields;            /** columns names retrieved after parsing */ 
    var $separator = ';';    /** separator used to explode each line */
    var $enclosure = '"';    /** enclosure used to decorate each field */

    var $max_row_size = 4096;    /** maximum row size to be used for decoding */

    function formata_array_para_inserir($data) {

        $nome_arquivo = "./uploads/".$data."";
        $file = fopen($nome_arquivo, 'r');
        $this->fields = fgetcsv($file, $this->max_row_size, $this->separator, $this->enclosure);
        $keys_values = explode(',',$this->fields[0]);

        $content    =   array();
        $keys   =   $this->escape_string($keys_values);

        $i  =   1;
        while( ($row = fgetcsv($file, $this->max_row_size, $this->separator, $this->enclosure)) != false ) {            
            if( $row != null ) { // skip empty lines
                $values =   explode(',',$row[0]);
                if(count($keys) == count($values)){
                    $arr    =   array();
                    $new_values =   array();
                    $new_values =   $this->escape_string($values);
                    for($j=0;$j<count($keys);$j++){
                        if($keys[$j] != ""){
                            $arr[$keys[$j]] =   $new_values[$j];
                        }
                    }

                    $content[$i]=   $arr;
                    $i++;
                }
            }
        }
        fclose($file);
        return $content;
    }

    function escape_string($valor_obtido_insercao_csv){
        $result =   array();
        foreach($valor_obtido_insercao_csv as $row){
            $result[]   =   str_replace('"', '',$row);
        }
        return $result;
    }   
}
?> 



<!-- <?php

//$campo1 = "MATRICULA";
//$campo2 = "NOME";
//$campo3 = "SENHA";

//---------------------------------------------------------------------------------------------------------------

// LER ARQUIVO CSV
 
$delimitador = ',';
$cerca = '"';

// Abrir arquivo para leitura

$f = fopen($nome_arquivo, 'r');

if ($f) {             //se o arquivo existir




	// //ABRE CONEXAO COM MYSQL LOCAL----------------------------------------------------------------------------------------

	// //DADOS DA CONEXAO COM MYSQL LOCAL
	// $server = "localhost";
	// $user = "root";
	// $pass = "fTyt0BUv";
	// $bd = "radius";

	// $link = mysql_connect("$server", "$user", "$pass");
	// if (!$link) {
	//     die('Não foi possível conectar: ' . mysql_error());
	// }
	// echo "</br>Conexão bem sucedida com mysql local !</br>";

	// $link_db = mysql_select_db($bd, $link);
	// if (!$link_db) echo "Erro ao selecionar base de dados mysql!</br>";
	// else echo "Base de dados mysql selecionada! </br>";
	//---------------------------------------------------------------------------------------------------------------

 
    // Ler cabecalho do arquivo
    $cabecalho = fgetcsv($f, 0, $delimitador, $cerca);
 
    // Enquanto nao terminar o arquivo
    while (!feof($f)) {
 
        // Ler uma linha do arquivo
        $linha = fgetcsv($f, 0, $delimitador, $cerca);
        if (!$linha) {
            continue;
        }
 
        // Montar registro com valores indexados pelo cabecalho
        $registro = array_combine($cabecalho, $linha);
 
        // PEGA DADOS PARA CADA LINHA DO ARQUIVO
        $nome = rtrim(($registro['NOME'].PHP_EOL));
	echo $nome."_";
	echo "</br>";
        $matricula = rtrim((string) ($registro['MATRICULA'].PHP_EOL));
	echo $matricula."_";
        echo "</br>";
        $cpf = rtrim(($registro['CPF'].PHP_EOL));    //pega cpf completo
	echo $cpf."_";
        echo "</br>";
        $senha = rtrim((string) (substr( $cpf, 0, 6 )));     //pega os 6 primerios digitos do cpf
	echo $senha."_";
        echo "</br>";
        $grupo = "academico";
	echo $grupo."_";
        echo ("</br></br>");
	$data = "".date('Y-m-d H:i:s');

	//INSERE REGISTROS EM MYSQL LOCAL

		//TESTA SE USUARIO JA EXISTE NA BASE MYSQL;
                $sql_testa = "SELECT username FROM radcheck WHERE username = $matricula";
                $resultado_teste = mysql_query($sql_testa, $link);
                //SE NÃO EXISTE, INSERE USUARIO
		if((mysql_num_rows($resultado_teste)) == 0){

                        $sql = "INSERT INTO radcheck (username, attribute, op, value) values ('$matricula', 'User-Password',':=', '$senha')";
                        if(mysql_query($sql, $link)) echo"</br>Insert 1 OK";

		        $sql2 = "INSERT INTO userinfo (username, firstname, changeuserinfo, creationdate, creationby, updatedate, updateby) VALUES ('$matricula', '$nome', '0', '$data', 'appwifi', '$data', 'appwifi')";
                        if(mysql_query($sql2, $link)) echo"</br>Insert 2 OK";

                        $sql3 = "INSERT INTO userbillinfo (username, creationdate, creationby) VALUES ('$matricula', '$data', 'appwifi')";
                        if(mysql_query($sql3, $link)) echo"</br>Insert 3 OK";

                        $sql4 = "INSERT INTO radusergroup (username, groupname, priority) VALUES ('$matricula', '$grupo', '1')";
                        if(mysql_query($sql4, $link)) echo"</br>Insert 4 OK";

		//SE EXISTE, ATUALIZA SENHA, GRUPO
                } else{ 
			//$SQL = "UPDATE radchek SET ";
			echo"USUARIO JA CADASTRADO</br>";
		}

    }//fecha while
    
    //Fecha conexao com mysql local
    mysql_close($link);
    //Fecha o arquivo
    fclose($f);

}//fecha if

echo "</br>foi";

//--------------------------------------------------------------------------------------------------------------

?>
 -->
