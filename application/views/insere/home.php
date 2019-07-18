  
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">

</head>
<body>


  <div class="container span7 text-center col-md-10 col-md-offset-1">
    <section class="col-md-12 connectedSortable">
      <!-- BOX -->
      <!-- /.box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h1 class="box-title">Informações Gerais</h1>
          
          <p>Para mais informações, use a sessão ajuda, que terá alguns exemplos.</p>
          <br>
          
        </div>
        <div class="box-body">
          <table id="tab_academicos"  class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Planilha De inserção</th>
                
                <th>Como Cadastrar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  A lista de importação deve conter nome completo, CPF e matrícula/registro ativo. 
                  Esta deve ser encaminhada em formato de documento xls (excel), csv ou planilha do Google Drive, para o e-mail gerencia.redes@unimontes.br através do e-mail institucional da coordenação ou do coordenador.

                  <br>
                  <br>
                  A tabela deve ser convertida para csv.
                </td>
                <td>
                 Os usuários devem ser cadastrados através dos Scripts de importação de dados do Sistema acadêmico (acadêmicos graduação) e de planilhas enviadas pelas Coordenações (Pós Graduação, Bolsistas de projetos, Fadenor). Não devem ser inseridos usuários individuais manualmente através da interface do sistema Daloradius.
               </td>
             </tr>
           </tfoot>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
   </section>

   <section class="col-md-12 connectedSortable">
    <!-- BOX -->
    <!-- /.box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mais Informações</h3>
        <p>Período de inserção de usuários na rede WIFI da Unimontes por grupo.</p>
        <br>

        
      </div>
      <div class="box-body">
        <table id="tab_academicos" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Grupo</th>
              <th>Periodo De atualização</th>
              <th>Onde Solicitar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Aluno</td>
              <td>Semestral</td>
              <td>WEB GIZ</td>
            </tr>
            <tr>
              <td>Servidor e Professor</td>
              <td>Mensal</td>
              <td>DDRH</td>
            </tr>
            <td>Pós Graduação</td>
            <td>Semestral</td>
            <td>Coordenação do programa</td>
          </tr>
          <td>Bolsistas de Projetos</td>
          <td>Semestral</td>
          <td>Coordenação do projeto</td>
        </tr>
        <td>Fadenor</td>
        <td>Semestral</td>
        <td>Diretoria Fadenor</td>
      </tr>
    </tfoot>
  </table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>


</div>
<br>
</body>

</html>

