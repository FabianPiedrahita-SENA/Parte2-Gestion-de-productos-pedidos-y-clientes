<?php require_once "views/shared/headerLogin.php"; ?>


<div class="main">
  <div class="box effect7">
    <div class="header">La Sazon del Aprendiz</div><br>

    
    <form method="post" action="index.php?control=usuario&action=login">
      <input type="number" name="cedula" placeholder="Cedula" required><br>
      <input type="password" name="contrasenia" placeholder="Contraseña" required ="required"><br>
      
      <button type="submit" class="butt">Acceder</button>
      <span class="signup">No tienes Cuenta?&nbsp;<a href="index.php?control=usuario&action=verRegistro" class="link">Registrate</a></span>
      </form>
  </div>
</div>
    
</body>
</html>


