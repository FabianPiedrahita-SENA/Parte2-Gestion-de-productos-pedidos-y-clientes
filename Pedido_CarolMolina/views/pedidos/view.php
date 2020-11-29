<?php require "views/shared/headerPedido.php";?>
    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>

        <table class="table">
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
                    <tr>
                    <td><?= $pedido['identificador'] ?></td>
                    <td><?= $pedido['fecha'] ?></td>
                    <td><?= $pedido['valor'] ?></td>
                    <td><?= $pedido['estado'] ?></td>
                    <td><?= $pedido['numeroDocumentoCliente'] ?></td>
                    <td><?= $pedido['numeroDocumentoDomiciliario'] ?></td>
                    <td><?= $pedido['idCarroCompras'] ?></td>
                    </tr>

            </tbody>
        </table>
    </div>
    <?php require "views/shared/footer.php";?>