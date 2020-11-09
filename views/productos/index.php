<?php require "views/shared/header.php";?>
<div class="card bglight rounded  ">
      <h1>Productos</h1>

      <a href="index.php?control=producto&action=insert" class="btn btn-danger">Crear nuevo</a>

      <table class="table mt-1">
          
          <thead>
             <tr>
                  <th> ID</th>
                  <th> Nombre</th>
                  <th> Descripcion</th>
                  <th> Foto</th>
                  <th> Precio</th>
                 
                </tr>
             
             </thead>
             <tbody>
                <?php foreach($data['productos'] as $producto){ ?>

                <tr>
                    <td><?= $producto['identificador'] ?></td>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['descripcion'] ?></td>
                    <td><?= $producto['foto'] ?></td>
                    <td><?= $producto['precio'] ?></td>


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
