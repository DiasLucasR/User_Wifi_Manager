
<!DOCTYPE html>
<html>
<head>
 <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
 <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">
</head>
<body>
</div>
<?php echo form_close(); ?>
<?php echo $this->session->flashdata('msg_derrubou'); ?> 
<?php echo $this->session->flashdata('msg_inseriu_academicos'); ?> 



</div>

<div class="container span7 text-center col-md-10 col-md-offset-2">
  <table id="tab_academicos" class="table table-bordered table-striped">
    <thead>
      <tr>
	<th>Desativa Alunos</th>
        <th width="30%">Inserir Alunos</th>
	</tr>
    </thead>
    <tbody>
      <tr>
       <td>
        <form method="POST" action="desbilita_usuarios_alunos">
          <div class="alert alert-dark" role="alert">
           <p>Desabilita todos os alunos.</p>
           <br> 
          <p>A cada início de semestre é preciso desabilitar os alunos.</p> 
   	  <p>Primeiro você desabilita os alunos,após isso insira o código do período</p>
	  <p>Somente em inicio de semestre é necessário desabilitar, pois há dois semestres letivos em andamento</p>


         </div>
         <br>

         <button type="submit" class="btn btn-dark">Desabilitar Academicos</button>

         <!--  <a href="desbilita_usuarios_alunos" class="btn btn-primary bg-dark" role="button" >Desabilitar Academicos</a> -->
       </form>

     </td>

     <td>
      <form method="POST" action="insere_academicos">
        <div class="alert alert-dark" role="alert">

         <p>Insira o código do período</p>
       </div>
       <input  class="form-control" type="text" name="cod_semestre" size="4" required>
       <br>
       <button type="submit" class="btn btn-dark">Inserir</button>
       <br>
     </form>
   </td>
<br>
 </tr>
</tfoot>
</table>



<br>
</div>
</div>
<br><br><br>
</body>
</html>

