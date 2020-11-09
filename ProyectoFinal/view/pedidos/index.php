<?php require_once "views/shared/header.php";?>

    <div class="container"> 
    <h1> <?php echo $data["titulo"]?></h1>
        <a href="index.php?control=pedido&action=insert" class="btn btn-success">Crear nuevo</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>ID Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['pedidos'] as $pedido) {  ?>
                    <tr>
                        <td><?= $pedido['identificador'] ?></td>
                        <td><?= $pedido['fecha'] ?></td>
                        <td><?= $pedido['valor'] ?></td>
                        <td><?= $pedido['estado'] ?></td>
                        <td><?= $pedido['numeroCliente'] ?></td>
                        <td>
                            <a href="index.php?control=pedido&action=edit&identificador=<?= $pedido['identificador'] ?>" class="btn btn-warning">Actualizar</a>
                            <a href="index.php?control=pedido&action=delete&identificador=<?= $pedido['identificador'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="index.php?control=pedido&action=view&identificador=<?= $pedido['identificador'] ?>" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                <?php  ?>
            </tbody>
        </table>
    </div>

    <?php require_once "views/shared/footer.php";?>
