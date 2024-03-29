<html>
<head>
  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi"); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">
</head>
<body>
 <div class="container box">
  <h3 align="center">How to Import CSV Data into Mysql using Codeigniter</h3>
  <br />

  <form method="post" id="import_csv" enctype="multipart/form-data">
   <div class="form-group">
    <label>Select CSV File</label>
    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
  </div>
  <br />
  <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
</form>
<br />
<div id="imported_csv_data"></div>
</div>
</body>
</html>

<script>
  $(document).ready(function(){

   load_data();

   function load_data()
   {
    $.ajax({
     url:"<?php echo base_url(); ?>csv_import/load_data",
     method:"POST",
     success:function(data)
     {
      $('#imported_csv_data').html(data);
    }
  })
  }

  $('#import_csv').on('submit', function(event){
    event.preventDefault();
    $.ajax({
     url:"<?php echo base_url(); ?>csv_import/import",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     cache:false,
     processData:false,
     beforeSend:function(){
      $('#import_csv_btn').html('Importing...');
    },
    success:function(data)
    {
      $('#import_csv')[0].reset();
      $('#import_csv_btn').attr('disabled', false);
      $('#import_csv_btn').html('Import Done');
      load_data();
    }
  })
  });
  
});
</script>
