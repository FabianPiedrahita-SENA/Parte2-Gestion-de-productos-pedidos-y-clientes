<?php require "views/shared/headerPedido.php";?>


     <div class="container">
        <h1>Crear pedido</h1>

        <form action="index.php?control=pedido&action=store" method="post">
            <div class="form-group">
         <label for="identificador">ID</label>
         <input class="form-control" type="text" id="identificador" name="identificador" required>  
            </div>

            
           


            <div class="form-group">
         <label for="fecha">Fecha</label>
         <input class="form-control" type="date" id="fecha" name="fecha" required>  
            </div>




            <div class="form-group">
         <label for="valor">Valor</label>
         <input class="form-control" type="text" id="valor" name="valor" required>  
            </div>



            <div class="form-group">
         <label for="estado">Estado</label>
         <input class="form-control" type="text" id="estado" name="estado" required>  
            </div>



            <div class="form-group">
         <label for="numeroDocumentoCliente">ID Cliente</label>
         <input class="form-control" type="number" id="numeroDocumentoCliente" name="numeroDocumentoCliente" required>  
            </div>
            
            
            <div class="form-group">
         <label for="numeroDocumentoDomiciliario">ID Domiciliario</label>
         <input class="form-control" type="number" id="numeroDocumentoDomiciliario" name="numeroDocumentoDomiciliario" required>  
            </div>
          
          
            <div class="form-group">
         <label for="idCarroCompras">Carro de Compras</label>
         <input class="form-control" type="number" id="idCarroCompras" name="idCarroCompras" required>  
            </div>




            <button class="btn btn-primary btn-block " type="submit"> Crear</button>




        </form>
      </div>  

      <?php require "views/shared/footer.php";?>