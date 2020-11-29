<?php

   class PedidoController
   {
       public function __construct()
       {
           require_once "models/Pedido.php";

       }


       public function index()
       {
        $pedidos = new Pedido();
           $data["pedidos"] = $pedidos->listar();
           //Cargar la vista
           require_once "views/pedidos/index.php";
       }
    


public function insert()
{
    require_once "views/pedidos/insert.php";
}

 
public function store()
{

    $identificador = $_POST['identificador'];
    $fecha = $_POST['fecha'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado'];
    $numeroDocumentoCliente = $_POST['numeroDocumentoCliente'];
    $numeroDocumentoDomiciliario = $_POST['numeroDocumentoDomiciliario'];
    $idCarroCompras = $_POST['idCarroCompras'];

$pedido = new Pedido();
$pedido->insert($identificador,$fecha, $valor, $estado, $numeroDocumentoCliente, $numeroDocumentoDomiciliario, $idCarroCompras);
$this->index();


}



public function edit($identificador)
{
    
    $pedido = new Pedido();

    $data["identificador"] = $identificador;
    $data["pedido"] = $pedido->getPedido($identificador);
    $data["titulo"] = "Actualizar Pedido";

    require_once "views/pedidos/edit.php";

}



public function update()
{

    $identificador = $_POST['identificador'];
    $fecha = $_POST['fecha'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado'];
    $numeroDocumentoCliente = $_POST['numeroDocumentoCliente'];
    $numeroDocumentoDomiciliario = $_POST['numeroDocumentoDomiciliario'];
    $idCarroCompras = $_POST['idCarroCompras'];
   
    
    $pedido = new Pedido();
    $pedido->update($identificador, $fecha, $valor, $estado, $numeroDocumentoCliente, $numeroDocumentoDomiciliario, $idCarroCompras);
    $this->index();

 
}

public function delete($identificador)
{

    $pedido = new Pedido();
    $pedido->delete($identificador);
    $this->index();

 
}


public function view($identificador)
{
    $pedido = new Pedido();
    $data["identificador"] = $identificador;
    $data["pedido"] = $pedido->getPedido($identificador);
    $data["titulo"] = "ver Vistas";
    require_once "views/pedidos/view.php";
}




}
   ?>