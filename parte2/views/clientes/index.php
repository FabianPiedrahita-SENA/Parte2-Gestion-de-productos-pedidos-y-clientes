<?php require "views/shared/header.php";?>

<div class="container">
   <h1>Clientes</h1>

      <table class="table mt-3">
          
         <thead>
            <tr>
               <th> Numero de documento</th>
               <th> --</th>
               </tr>
             
         </thead>
         <tbody>
            <?php foreach($data['clientes'] as $cliente){ ?>

               <tr>
                  <td><?= $cliente['numeroDocumento'] ?></td>

                  <td><a href="index.php?control=cliente&action=view&numeroDocumento=<?= $cliente['numeroDocumento'] ?>" class="btn btn-info">
                    Ver</a>

                     <a href="index.php?control=cliente&action=edit&numeroDocumento=<?= $cliente['numeroDocumento'] ?>" class="btn btn-warning">
                       Actualizar</a>
                      
                     <a href="index.php?control=cliente&action=delete&numeroDocumento=<?= $cliente['numeroDocumento'] ?>" class="btn btn-danger">
                       Eliminar</a>
                   
                  </td>


               </tr>    
               <?php } ?>

         </tbody>

      </table>

   </div>




   <?php require "views/shared/footer.php";?>