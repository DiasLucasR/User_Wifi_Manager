
<html >

<head>
  <style type="text/css">

    .navbar.custom {
      height: : 50%;  
      margin: 0 auto;
    }
  </style>
  <meta charset="utf-8">
  <title>Wifi Manager</title>
  <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/icon_wifi.png"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.js"); ?>">

  
</head>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="navbarText">


     <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 

      <?php if ($this->session->userdata('login')) { ?>

 <li class="nav-item ">

 <img  src="<?php echo base_url("assets/imagens/logo_branca.png"); ?>"  width="48" height="37" >&nbsp&nbsp&nbsp
</li>
 
 <li class="nav-item ">

        <a class="nav-link text-white" href="<?php echo base_url("Home_Controller/index") ?>">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url("inserealunos") ?>">Inserir Academicos</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url("insereoutros") ?>">Inserir da Planilha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url("help") ?>">Ajuda</a>
      </li>
    </ul>

    <ul class="navbar-nav mt-2 mt-lg-0">
    <li>
      <i class="navbar-text text-white "> <?php echo $this->session->userdata('uname'); ?>&nbsp&nbsp&nbsp&nbsp</i>
    </li>
    </ul>


    <ul class="navbar-nav mt-5 mt-lg-0">


    <li class="nav-item">
    <a class="nav-link text-white" href="<?php echo base_url("Home_Controller/Historico_view") ?>">Histórico&nbsp</a>

    </li>
    <li>
      <a class=" nav-link text-white" href="<?php echo base_url(); ?>home/logout">Sair&nbsp&nbsp</a>
      
    </li>
  </ul>
  
  
  
  
  <?php } else {

    redirect('Login/index');
    
  } ?>
  
</div>


</nav>

<br><br>
