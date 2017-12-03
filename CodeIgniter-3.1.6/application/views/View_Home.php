
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LogSIS | Aonde</title>
 <?php $this->load->view('metas'); ?>  <!-- Carrega arquivo com metastag --> 
 <?php $this->load->view('css'  ); ?>  <!-- carrega Arquivos CSS -->
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 
  
  

  <div class="content-wrapper">

      <?php $this->load->view('topo');     ?>  <!--- Carrega a barra do topo -->
      <?php $this->load->view('side_bar'); ?>  <!-- Carrega a side bar -->
      <?php $this->load->view('chat_bar'); ?>  <!-- carrega a barrade chat -->



        <h1>Conteúdo!!</h1>




    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">  </section>
 
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php $this->load->view('js'); ?>   <!-- Carrega os arquivos de JS -->
</body>
</html>
