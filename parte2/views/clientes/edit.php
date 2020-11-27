<?php require "views/shared/header.php";?>

     <div class="container">
        <h1>Actualizar Domiciliario</h1>

        <form action="index.php?control=cliente&action=update" method="post">
          <input type="hidden" name="identificador" value=<?php echo $data["numeroDocumento"]; ?> >

         <div class="form-group">
            <label for="numeroDocumento">Numero De Documento:</label>
            <input readonly class="form-control" type="text" id="numeroDocumento" name="numeroDocumento" required  value=<?php echo $data["cliente"]["numeroDocumento"]; ?> 
         ></div>

         <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" id="nombre" name="nombre" required  value=<?php echo $data["cliente"]["nombre"]; ?>>  
         </div>

         <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input class="form-control" type="text" id="apellido" name="apellido" required  value=<?php echo $data["cliente"]["apellido"]; ?>>  
         </div>
           
         <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input class="form-control" type="number" id="telefono" name="telefono" required  value=<?php echo $data["cliente"]["telefono"]; ?>>  
         </div>

         <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input class="form-control" type="text" id="direccion" name="direccion" required  value=<?php echo $data["cliente"]["direccion"]; ?>>  
         </div>

         <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email" required  value=<?php echo $data["cliente"]["email"]; ?>>  
         </div>

         <button class="btn btn-primary btn-block " type="submit"> Modificar</button>

        </form>
      </div>  

        
      <?php require "views/shared/footer.php";?>