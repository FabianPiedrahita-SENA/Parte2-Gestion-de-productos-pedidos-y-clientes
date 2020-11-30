
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/prueba3.css">



<title>Producto</title>
</head>
<body>
<?php
     if(!isset($_SESSION))
            {
                session_start();
            }
    ?>


<?php

if($_SESSION['rol'] == 'Administrador'){ ?>


<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="index.php?control=producto&action=index">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?control=producto&action=index">Listar</a>
          <a class="dropdown-item" href="index.php?control=producto&action=insert">Crear nuevo</a>
        </div>
      </li>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
 <li class="nav-item dropdown">

   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Cliente
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" href="index.php?control=cliente&action=index">Listar</a>
   </div>
 </li>
 
     
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pedido
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?control=pedido&action=index">Listar</a>

        </div>
      </li>

     
  </div>
      <?php   }  ?>
   
     
    
      <?php 
      if($_SESSION['rol'] == 'Cliente'){ ?> 

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="index.php?control=producto&action=index">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
 <li class="nav-item dropdown">

   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Cliente
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" href="index.php?control=cliente&action=index">Listar</a>
   </div>
 </li>

      <?php   }  ?>



      <?php 
      if($_SESSION['rol'] == 'Domiciliario'){ ?> 

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="index.php?control=producto&action=index">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
 <li class="nav-item dropdown">

   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Domiciliario
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" >Listar</a>
   </div>
 </li>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pedido
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?control=pedido&action=index">Listar</a>
          <a class="dropdown-item" href="index.php?control=pedido&action=insert">Crear</a>
        </div>
      </li>

     
  </div>

      <?php   }  ?>

    
      
<div class="salir">
<ul class="navbar-nav">
            <?php
              if(isset($_SESSION["numeroDocumento"]))
              {
               echo "<li class='nav-item text-align-left'>";
               echo "<a class='nav-link'  href='index.php?control=usuario&action=logout'> Salir </a>";
               echo "</li>";
              }
              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='index.php?control=usuario&action=verLogin'> Ingresar </a>";
                echo "</li>";
              }
            
            ?> 
     
</div>
      
     


  </div>

 
</nav>

