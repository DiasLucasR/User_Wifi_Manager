<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="shortcut icon" href=assets/imagens/indice.png >
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">
</head>
<body>

  <section class="col-md-12 connectedSortable">
    <!-- BOX -->
    <!-- /.box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title ">Resultado</h3>
        <p></p>
        
      </div>
      <div class="box-body">
        <table id="tab_academicos" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>WebGiz</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>	
                <?php
                
                var_dump($result_array);
                

                ?>
                
              </td>
              
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>













