
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<div class="card bglight rounded  ">
      <h1>Productos</h1>

      <a href="index.php?control=producto&action=insert" class="btn btn-success">Crear nuevo</a>

      <table class="table mt-1">
          
          <thead>
             <tr>
                  <th> ID</th>
                  <th> Nombre</th>
                  <th> Marca</th>
                  <th> Precio</th>
                  <th> Cantidad</th>
                </tr>
             
             </thead>
             <tbody>
                <?php foreach($data['productos'] as $producto){ ?>

                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['marca'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td>
                       
                       
                    </td>
                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

