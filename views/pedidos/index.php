<?php require "views/shared/header.php";?>

    <div class="container"> 
    
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>ID Cliente</th>
                    <th>ID Domiciliario</th>
                    <th>ID Carro de Compras</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['pedidos'] as $pedido) {  ?>
                    <tr>
                        <td><?= $pedido['identificador'] ?></td>
                        <td><?= $pedido['fecha'] ?></td>
                        <td><?= $pedido['valor'] ?></td>
                        <td><?= $pedido['estado'] ?></td>
                        <td><?= $pedido['numeroDocumentoCliente'] ?></td>
                        <td><?= $pedido['numeroDocumentoDomiciliario'] ?></td>
                        <td><?= $pedido['idCarroCompras'] ?></td>
                        <td>
                            <a href="index.php?control=pedido&action=edit&id=<?= $pedido['identificador'] ?>" class="btn btn-warning">Actualizar</a>
                            <a href="index.php?control=pedido&action=delete&id=<?= $pedido['identificador'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="index.php?control=pedido&action=view&id=<?= $pedido['identificador'] ?>" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require "views/shared/footer.php";?>
