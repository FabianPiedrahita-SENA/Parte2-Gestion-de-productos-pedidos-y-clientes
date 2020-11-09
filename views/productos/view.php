<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>

        <table class="table">
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
                    <tr>
                    <td><?= $data["producto"] ["identificador"]; ?></td>
                    <td><?= $data["producto"] ["nombre"]; ?></td>
                    <td><?= $data["producto"] ["descripcion"]; ?></td>
                    <td><?= $data["producto"] ["foto"]; ?></td>
                    <td><?= $data["producto"] ["precio"]; ?></td>
                    </tr>

            </tbody>
        </table>
    </div>


    
</body>
</html>