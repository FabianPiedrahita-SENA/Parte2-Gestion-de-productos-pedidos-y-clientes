<?php require "views/shared/header.php";?>

     <div class="container">
        <h1 class="text-center">Actualizar producto</h1>

      <br> <form action="index.php?control=producto&action=update" method="post">
          <input type="hidden" name="identificador" value=<?php echo $data["identificador"]; ?> >






            <div class="form-group text-center">
        <b> <label for="nombre">Nombre</label> </b>
         <input size="100" class="form-control" type="text" id="nombre" name="nombre" required  value=<?php echo $data["producto"]["nombre"]; ?> 
           > </div>







            <div class="form-group text-center">
        <b> <label for="descripcion">descripcion</label> </b>
         <input size="100" class="form-control" type="text" id="descripcion" name="descripcion" required  value=<?php echo $data["producto"]["descripcion"]; ?>>  
            </div>


         



            <div class="form-group text-center">
        <b> <label for="foto">foto</label> </b>
         <input size="100" class="form-control" type="text" id="foto" name="foto" required  value=<?php echo $data["producto"]["foto"]; ?>>  
            </div>






            <div class="form-group text-center">
         <b> <label for="precio">precio</label> </b>
         <input size="100" class="form-control" type="text" id="precio" name="precio" required  value=<?php echo $data["producto"]["precio"]; ?>>  
            </div>






        <br>  <button class="btn btn-warning " type="submit"  style='width:200px; height:40px '> Modificar</button>




        </form>
      </div>  

        
      <?php require "views/shared/footer.php";?>