<?php require_once "views/shared/header.php";?>
    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>
        <form action="index.php?control=pedido&action=update" method="post">
            <input type="hidden" name="identificador" value=<?php echo $data["identificador"]; ?>>
            <div>
                <label for="identificador">ID</label>
                <input type="number" name="identificador" id="identificador" class="form-control" value=<?php echo $data["pedido"]["identificador"]; ?>>
            </div>
            <div>
                <label for="nombre">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value=<?php echo $data["pedido"]["fecha"]; ?>>
            </div>
            <div>
                <label for="valor">Valor</label>
                <input type="text" name="valor" id="valor" class="form-control" value=<?php echo $data["pedido"]["valor"]; ?>>
            </div>
            <div>
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" value=<?php echo $data["pedido"]["estado"]; ?>>
            </div>
            <div>
                <label for="numeroCliente">ID Cliente</label>
                <input type="number" name="numeroCliente" id="numeroCliente" class="form-control" value=<?php echo $data["pedido"]["numeroCliente"]; ?>>
            </div>
            <button type="sumbit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <?php require_once "views/shared/footer.php";?>

    