<?php require_once "views/shared/headerLogin.php"; ?>

<!-- <?php 

// if(isset($_SESSION['rol'])){

//   switch($_SESSION['rol']){
     
//     case 1:
//       header('location:views/home/index.php');
//     break;

//     case 2:
//     header('location: domiciliario.php');
//     break;

//     default:

//   }
    
//   if(isset($_POST['numeroDocumento'])  && isset($_POST['contrasenia']))
//   {

//      $username = $_POST['numeroDocumento'];
//      $password = $_POST['contrasenia'];

//       $db= new conectar();
//       $query = $db->conectar()->prepare('SELECT*FROM usuario WHERE numeroDocumento = numeroDocumento AND contrasenia= :contrasenia' );
//       $query ->execute(['numeroDocumento' => $numeroDocumento, 'contrasenia' => $contrasenia]);

      
//   }


// }

?>
 -->


<div class="main">


  <div class="box effect7">

  
  
  <br><div class="header">La Sazon del Aprendiz</div><br>
    
    <form method="post" action="index.php?control=usuario&action=login">
    <?php

    if(isset($data["error"]) ){
      echo "<div class='alert alert-danger' role='alert'>";
        echo $data["error"]; 
        echo "</div>";
    }
     ?>


      <input type="number" name="numeroDocumento" placeholder="Numero Documento" required>
      
    
      <input type="password" name="contrasenia" placeholder="Contraseña" required ="required">
      
      <button type="submit" class="butt">Acceder</button>
      <span class="signup">No tienes Cuenta?&nbsp;<a href="index.php?control=usuario&action=verRegistro" class="link">Registrate</a></span>
      </form>
  </div>
</div>
    

</body>
</html>


