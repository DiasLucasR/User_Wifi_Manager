<head>
  <meta charset="utf-8">

  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">
</head>
<body>
</div>                    <?php echo form_close(); ?>
<?php echo $this->session->flashdata('msg_derrubou_outros'); ?>
<?php echo $this->session->flashdata('msg_inserido_csv'); ?>
</div>
</div>
<div class="container span7 text-center col-md-10 col-md-offset-2">

  <table id="tab_academicos" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Inserir Bolsista Fadenor / Servidor </th>
        <th>Saiba Como</th>
      </tr>

    </thead>
    <tbody>
      <tr>
        <td width="40%">
          <form method="POST" action="Home_Controller/upload_arquivo_csv_geral" enctype="multipart/form-data">
           <div>

            <label for="insere_bolsista">Grupo</label><br>
            <select class="form-control" name="grupo_usuarios" required> 
              <option value="">Selecione</option>
              <option value="bolsista">Bolsista</option>
              <option value="servidor">Servidor</option>
              <option value="posgraduacao">Pós-graduação</option>
              <option value="fadenor">Fadenor</option>
              <option value="projeto">Projetos</option>
            </select> 
            <label for="insere_bolsista">Arquivo</label><br>
            <input type="file" accept=".csv"  name="csv_insere" class="btn btn-dark" id="csv_insere" required><br><br>
            <input type="submit" value="Upload" class="btn btn-dark" >  

          </div>
        </form>
      </td>
      <td>
       <p>Verifique se a planilha esta bem formatada.</p>
	<p>(****Verifique os cabeçalhos****)</p>
       <p>Caso tenha alguma dúvida de como adicionar com Registro</p>
       <p>Cabeçalho: MATRICULA,NOME,CPF</p>
       <p>Caso tenha dúvidas de como adicionar bolsistas PPGDS </p>
       <p>Cabeçalho: NOME,CPF</p>

       <br>
       <a class="btn btn-dark" href="<?php echo base_url("Home_Controller/help") ?>" role="button">Ajuda</a>
       <br>
       <br>

     </td>
   </tr>
 </tfoot>
</table>


<div class="alert alert-dark" role="alert">
  <p> Esse sistema de inserção só permite arquivos .csv(separado por virgulas),
   verifique a extensão do arquivo, tanto o excel quanto o google sheets exportam o formato.</p>

 </div>
</div>
</div>
</body>
</html>


