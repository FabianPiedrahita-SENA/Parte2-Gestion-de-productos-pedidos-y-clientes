<?php require "views/shared/header.php";?>

<div class="card bglight rounded  ">
<h1 class="text-center">Productos</h1>

     <br> <a href="index.php?control=producto&action=insert" class="btn btn-warning btn-block"  style='width:200px; height:40px '>Crear nuevo</a>
<br> <br>    <table class="table mt-1">
           
          <thead>
             <tr>
                  <th> ID</th>
                  <th> Nombre</th>
                  <th> Descripcion</th>
                  <th> Foto</th>
                  <th> Precio</th>
                 
                </tr>
             
             </thead>
             <tbody  >
                <?php foreach($data['productos'] as $producto){ ?>

                <tr>
                    <td><?= $producto['identificador'] ?></td>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['descripcion'] ?></td>
                    <td> <img src=<?= $producto['foto']?> width="150" height="150" ></td>
                    <td>$<?= $producto['precio'] ?></td>


                    <td>
                       
                       
                    <a href="index.php?control=producto&action=edit&id=<?= $producto['identificador'] ?>" class="btn btn-warning">
                       Actualizar</a>
                      


                       <a href="index.php?control=producto&action=delete&id=<?= $producto['identificador'] ?>" class="btn btn-danger">
                       Eliminar</a>
                   
                       <a href="index.php?control=producto&action=view&id=<?= $producto['identificador'] ?>" class="btn btn-success">
                       Ver</a>
                   
                   
                   
                   
                    </td>


                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>




   <?php require "views/shared/footer.php";?>
