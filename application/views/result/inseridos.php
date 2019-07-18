<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="content-wrapper">
    <section class="content">
      <!-- Main row -->
	      <div class="row">
	        <!-- Left col -->
	        <section class="col-md-9 connectedSortable">
	          <div class="box box-primary">
	            <div class="box-header">
	              <h3 class="box-title">Data Table With Full Features</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="tabelapacas" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  
	                  			<?php
                                
                                echo "Informações sobre a ultimas inserção";
                                echo "<br><br>";
                                echo "Inseridos:  ",$info_inserido->num_insert;
                                echo "<br><br>";
                                echo "Data de Inserção:  ",$info_inserido->date;
                                echo "<br><br>";
                                echo "Cod. Periodo:  ",$info_inserido->cod_semestre_insert;
                                echo "<br><br>";
                                echo "Tipo de Inserção",$info_inserido->tipo;
                                echo "______________________________";
                                echo "<br><br>";
                                echo "Informações sobre a ultima atualização";
                                echo "<br><br>";
                                echo "Atualizados:  ",$info_atualizado->num_up;
                                echo "<br><br>";
                                echo "Data de Atualização:  ",$info_atualizado->date;
                                echo "<br><br>";
                                echo "Cod. Periodo:  ",$info_atualizado->cod_semestre_up;
                                echo "<br><br>";
                                echo "Tipo de Inserção",$info_atualizado->tipo;
                                echo "<br><br>";
                                
                                
                                
                                // Isso aqui imprime pessoas da pesquisa.(Talvez util)
                                // foreach ($info_insere_radius as $row) {
                                //   echo "Nome: ".$row->nome."<br>";
                                //   echo "Matricula: ".$row->matricula."<br><br>";
                                // }

                                ?></td>
                 <td><?php
                                
                                
                                echo "Informações sobre a ultimas inserção";
                                echo "<br><br>";
                                echo "Inseridos:  ",$info_inserido_csv->num_insert;
                                echo "<br><br>";
                                echo "Data de Inserção:  ",$info_inserido_csv->date;
                                echo "<br><br>";
                                echo "Tipo de Inserção",$info_inserido_csv->tipo;
                                echo "<br><br>"
                                echo "Informações sobre a ultima atualização";
                                echo "<br><br>";
                                echo "Atualizados:  ",$info_atualizados_csv->num_up;
                                echo "<br><br>";
                                echo "Data de Atualização:  ",$info_atualizados_csv->date;
                                echo "<br><br>";
                                echo "Ultimo grupo adicionado: 'Grupo' ";
                                echo "<br><br>"
                                echo "Tipo de Inserção",$info_atualizados_csv->tipo;
                                
                                
                                
                                // Isso aqui imprime pessoas da pesquisa.(Talvez util)
                                // foreach ($info_insere_radius as $row) {
                                //   echo "Nome: ".$row->nome."<br>";
                                //   echo "Matricula: ".$row->matricula."<br><br>";
                                // }

                                ?>




	                     
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                </tr>
	                </tbody>
	                </table>
	            </div>
	       	</div>

	   		 </section>
	    	</div>
	</section>
</div>


</body>
</html>
