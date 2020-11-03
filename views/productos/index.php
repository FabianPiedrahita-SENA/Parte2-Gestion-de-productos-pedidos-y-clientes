<?php require "views/shared/header.php";?>


<div class="card bglight rounded">
<br> <br><h1><?php echo $data["titulo"] ?></h1>

      <a href="index.php?control=producto&action=insert" class="btn btn-success">Crear nuevo</a>

      <table class="table mt-1">
          
          <thead>
             <tr>
                  <th> ID</th>
                  <th> Nombre</th>
                  
                  <th> Opciones</th>
                </tr>
             
             </thead>
             <tbody>
                <?php foreach($data['productos'] as $producto){ ?>

                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['nombreMarca'] ?></td>
                    <td>
                       
                       <a href="index.php?control=producto&action=edit&id=<?= $producto['id'] ?>" class="btn btn-warning">
                       Actualizar</a>
                       <a href="index.php?control=producto&action=delete&id=<?= $producto['id'] ?>" class="btn btn-danger">
                       Eliminar</a>
                       <a href="index.php?control=producto&action=index&id=<?= $producto['id'] ?>" class="btn btn-info">
                       Ver</a>

                    </td>
                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>






   <?php require "views/shared/footer.php";?>

