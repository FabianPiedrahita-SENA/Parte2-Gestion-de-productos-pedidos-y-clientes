<?php require "views/shared/header.php";?>
<div class="card bglight rounded  ">
      <h1>Clientes</h1>

      <a href="index.php?control=cliente&action=insert" class="btn btn-danger">Crear nuevo</a>

      <table class="table mt-1">
          
          <thead>
             <tr>
                  <th> documento</th>
                  <th> Nombre</th>
                  <th> apellido</th>
                  <th> direccion</th>
                  <th> telefono</th>
                 
                </tr>
             
             </thead>
             <tbody>
                <?php foreach($data['clientes'] as $cliente){ ?>

                <tr>
                    <td><?= $cliente['documento'] ?></td>
                    <td><?= $cliente['nombre'] ?></td>
                    <td><?= $cliente['apellido'] ?></td>
                    <td><?= $cliente['direccion'] ?></td>
                    <td><?= $cliente['telefono'] ?></td>


                    <td>
                       
                       
                    <a href="index.php?control=cliente$cliente&action=edit&id=<?= $cliente['documento'] ?>" class="btn btn-warning">
                       Actualizar</a>
                      


                       <a href="index.php?control=cliente$cliente&action=delete&id=<?= $cliente['documento'] ?>" class="btn btn-danger">
                       Eliminar</a>
                   
                       <a href="index.php?control=cliente$cliente&action=view&id=<?= $cliente['documento'] ?>" class="btn btn-success">
                       Ver</a>
                   
                   
                   
                   
                    </td>


                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>




   <?php require "views/shared/footer.php";?>