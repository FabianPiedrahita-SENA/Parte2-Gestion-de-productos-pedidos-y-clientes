<?php require "views/shared/header.php";?>


     <div class="container">
        <h1 class="text-center">Crear producto</h1>

        <form action="index.php?control=producto&action=store" method="post">
            <div class="form-group text-center">
            <br>
         <b><label for="nombre">Nombre:</label></b>
         <input size="100" class="form-control" type="text" id="nombre" name="nombre" required>  
            </div>

            
           


            <div class="form-group text-center">
            <b>  <label for="descripcion">descripcion:</label></b>
         <input size="100" class="form-control" type="text" id="descripcion" name="descripcion" required>  
            </div>




            <div class="form-group text-center">
            <b>   <label for="foto">foto:</label></b>
         <input size="100" class="form-control" type="text" id="foto" name="foto" required>  
            </div>








            <div class="form-group text-center">
         <b> <label for="precio">precio:</label> </b>
         <input size="100" class="form-control" type="text" id="precio" name="precio" required>  
            </div>




            <button class="btn btn-warning btn-block " type="submit" style='width:400px; height:40px '> Crear</button>




        </form>
      </div>  

      <?php require "views/shared/footer.php";?>