<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">
  <title>Informações</title>
</head>
<body>

  <div class="container span7 text-center col-md-10 col-md-offset-1">
    
    <table id="tab_academicos" class="table table-bordered table-striped"  >
      <thead>
        <tr>
          <th>Inserir Usuários sem Número de Registro</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <p class="help-block">A lista de importação deve conter: Nome Completo e CPF</p>
            <p class="help-block">O formato da lista deve estar em .csv.</p>
            <p class="help-block">As informações devem estar separadas por virgulas.</p>
                <a class="btn btn-dark" href="<?php echo base_url("Home_Controller/insereoutros") ?>" role="button">Inserir</a>

              </td>
            </tr>
          </tfoot>
	<table id="tab_academicos" class="table table-bordered table-striped"  >
      <thead>
            <tr>
              <th>Inserir Usuários com Número  Registro</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
               <p class="help-block">A lista de importação deve conter: Matricula, Nome Completo e CPF</p>
               <p class="help-block">O formato da lista deve estar em .csv.</p>
               <p class="help-block">As informações devem estar separadas por virgulas.</p>
               
                    <a class="btn  btn-dark" href="<?php echo base_url("Home_Controller/insereoutros") ?>" role="button">Inserir</a>

                  </tr>
                </tfoot>
              </table>
            </div>
	<br>
	
          </body>

          </html>

