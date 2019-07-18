
<head>
	
</head>
<body>
<div class="container span7 text-center col-md-10 col-md-offset-2">

		<?php 


		foreach ($dados as $row ) {

			if ($row->tipo == 'csv') { ?>

			<table id="historico_outros" class="table table-bordered table-striped">
				<thead>
 					
						<th colspan="2">Dia:  <?php echo ($row->date); ?></th>
					
				</thead>
				<tbody>
					<tr>
						<td width="50%">
							<p>Inseridos: <?php echo ($row->num_insert); ?></p>
							<br> 
							<p>Atualizados: <?php echo ($row->num_update); ?></p>
						       <br>
							<p>Grupo: <?php echo ($row->grupo); ?></p>
						</td>
						<td width="50%">
							<p>Tipo: <?php echo ($row->tipo); ?></p>
	                                                <br>
                                                        <p>Usuário: <?php echo ($row->usuario_inseriu); ?></p>
						</td>

										

					</tr>
				</tfoot>
			</table>

			<?php 

		}
		else{ 

			?>
			<table id="historico_alunos" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th colspan="2">Dia: <?php echo ($row->date); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="50%">
							<p>Inseridos: <?php echo ($row->num_insert); ?></p>
							<br> 
							<p>Atualizados: <?php echo ($row->num_update); ?></p>
							<br> 
							<p>Codigo do Periodo: <?php echo ($row->cod_semestre_insert); ?></p>
						</td>
						<td width="50%">
							<p>Tipo: <?php echo ($row->tipo); ?></p>
							<br>
							<p>Grupo: <?php echo ($row->grupo); ?></p>
							 <br>
                                                        <p>Usuário: <?php echo ($row->usuario_inseriu); ?></p>

                                                
						</td>

					</tr>
				</tfoot>
			</tbody>
		</table>

		<?php 

	}

}



?>
</div>

</body>
