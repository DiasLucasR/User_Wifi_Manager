
<head>

</head>
<body>
<div class="container span7 text-center col-md-10 col-md-offset-2">

		<?php 


		foreach ($dados as $row ) {

			if ($row->tipo == 'csv') { ?>

			<table id="historico_outros" class="table table-bordered table-striped">
	<thead class="bg-dark text-white">

            <th colspan="5">Dia:  <?php echo ($row->date); ?></th>

        </thead>
        <thead>

            <th> Inseridos</th>
            <th> Atualizados</th>
            <th> Grupo</th>
            <th> Tipo</th>
            <th> Usuário</th>

        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo ($row->num_insert); ?>
                 </td>
                  <td>
                    <?php echo ($row->num_update); ?>
                  </td>
                  <td>
                    <?php echo ($row->grupo); ?>
                </td>
                <td >
                    <?php echo ($row->tipo); ?>
                 </td>
                <td >
                    <?php echo ($row->usuario_inseriu); ?>
                </td>



            </tr>
        </tfoot>
			</table>

			<?php 

		}
		else{ 

			?>
			<table id="historico_alunos" class="table table-bordered table-striped">
 <thead class="bg-dark text-white">

            <th colspan="6" >Dia:  <?php echo ($row->date); ?></th>

        </thead>
        <thead>

            <th> Inseridos</th>
            <th> Atualizados</th>
            <th> Codigo do Periodo</th>
            <th> Grupo</th>
            <th> Tipo</th>
            <th> Usuário</th>
            </thead>	
   <tbody>
            <tr>
                <td>
                    <?php echo ($row->num_insert); ?>
                 </td>
                  <td>
                    <?php echo ($row->num_update); ?>
                  </td>
                  <td>
                    <?php echo ($row->cod_semestre_insert); ?>
                  </td>
                  <td>
                    <?php echo ($row->grupo); ?>
                </td>
                <td >
                    <?php echo ($row->tipo); ?>
                 </td>   
                <td >
                    <?php echo ($row->usuario_inseriu); ?>
                </td>



            </tr>
        </tfoot>
    </table>
	

		<?php 

	}

}



?>
</div>
</div>
<br>
</body>
