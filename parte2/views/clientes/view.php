<?php require "views/shared/header.php"; ?>

<div class="container">

    <h1> <?php echo $data["titulo"]?></h1>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th> Numero de documento</th>
                <th> Rol</th>
                <th> Nombre</th>
                <th> Apellido</th>
                <th> Direccion</th>
                <th> Telefono</th>
                <th> Correo electrónico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $data["cliente"]['numeroDocumento'] ?></td>
                <td><?= $data["cliente"]['rol'] ?></td>
                <td><?= $data["cliente"]['nombre'] ?></td>
                <td><?= $data["cliente"]['apellido'] ?></td>
                <td><?= $data["cliente"]['telefono'] ?></td>
                <td><?= $data["cliente"]['direccion'] ?></td>
                <td><?= $data["cliente"]['email'] ?></td>
            </tr>

        </tbody>
    </table>
    <a href="index.php?control=cliente&action=index" class="btn btn-primary">Volver</a>
</div>


<?php require "views/shared/footer.php"; ?>

