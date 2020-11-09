<?php require_once "views/shared/headerLogin.php"; ?>




<div class="main">

  <div class="box effect7"><br><br><br>
    <div class="header">Registro Usuario</div><br>
    <form method="post" action="index.php?control=usuario&action=registrar">
        <input type="number" name="cedula" placeholder="Cédula" required /><br>
        <input type="text" name="nombre" placeholder="Nombre" required /><br>
    	<input type="email" name="email" placeholder="Email" required /><br>
        <input type="password" name="contrasenia" placeholder="Contraseña" required="required" /><br>

        <button  class="butt" type="submit">Registrarse</button>

      <span class="signup">Ya Tienes Una Cuenta?&nbsp;<a href="index.php?control=usuario&action=verLogin" class="link">Iniciar Sesion</a></span>
    </form>
   
  </div>
</div>
    
</body>
</html>


     