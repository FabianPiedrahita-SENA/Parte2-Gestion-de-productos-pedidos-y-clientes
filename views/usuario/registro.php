<?php require_once "views/shared/headerLogin.php"; ?>



<div class="main">

  <div class="box effect7"><br>
    <div class="header">Registro Usuario</div><br>
    <form  action="index.php?control=usuario&action=registrar" method="post">
        <input type="number" name="numeroDocumento" placeholder="Numero Documento" required />

        <select name="rol" required>
					<option value="rol" selected disabled> Rol</option>
					<option class="color" value="Administrador">Administrador</option>
          <option class="color" value="Domiciliario">Domiciliario</option>
          <option class="color" value="Cliente">Cliente</option> 
        </select>
        
        <input type="text" name="nombre" placeholder="Nombre" required />
        <input type="text" name="apellido" placeholder="Apellido" required />
        <input type="number" name="telefono" placeholder="Telefono" required />
        <input type="text" name="direccion" placeholder="Direccion" required />
        <input type="email" name="email" placeholder="Email" required />

   

        <input type="password" name="contrasenia" placeholder="Contraseña" required="required" />

        <button  class="butt"   type="submit" >Registrarse</button>

      <span class="signup">Ya Tienes Una Cuenta?&nbsp;<a href="index.php?control=usuario&action=verLogin" class="link">Iniciar Sesion</a></span>
    </form>
   
  </div>
</div>
    
</body>
</html>


     