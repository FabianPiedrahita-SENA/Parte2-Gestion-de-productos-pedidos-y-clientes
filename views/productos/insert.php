<?php require "views/shared/header.php";?>


     <div class="container">
        <h1>Crear producto</h1>

        <form action="index.php?control=producto&action=store" method="post">
            <div class="form-group">
         <label for="nombre">Nombre</label>
         <input class="form-control" type="text" id="nombre" name="nombre" required>  
            </div>

            <div class="form-group">
         <label for="proveedor">proveedor</label>
         <input class="form-control" type="text" id="proveedor" name="proveedor" required>  
            </div>


           


            <div class="form-group">
         <label for="descripcion">descripcion</label>
         <input class="form-control" type="text" id="descripcion" name="descripcion" required>  
            </div>




            <div class="form-group">
         <label for="foto">foto</label>
         <input class="form-control" type="file" id="foto" name="foto" required>  
            </div>








            <div class="form-group">
         <label for="precio">precio</label>
         <input class="form-control" type="text" id="precio" name="precio" required>  
            </div>




            <button class="btn btn-primary btn-block " type="submit"> Crear</button>




        </form>
      </div>  

      <?php require "views/shared/footer.php";?>