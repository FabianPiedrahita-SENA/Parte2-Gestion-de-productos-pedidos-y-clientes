<?php

    class ClienteController
    {
        public function __construct()
        {
            require_once "models/Cliente.php";
        }

        public function inedex()
        { 
            $clientes = new Cliente();
            $data["clientes"] = $clientes->listar();
            //Cargar la vista
            require_once "views/clientes/index.php";
        }

        public function insert()
{
 require_once "views/clientes/insert.php";
}


public function store()
{

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];



$cliente = new Cliente();
$cliente->insert($documento, $nombre, $apellido, $direccion, $telefono);
$this->index();


}



public function edit($documento)
{
 
 $cliente = new Cliete();

 $data["documento"] = $documento;
 $data["cliente"] = $cliente->getCliente($documento);
 $data["titulo"] = "Actualizar cliente";

 require_once "views/clientes/edit.php";

}



public function update()
{

 $documento = $_POST['documento'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];

 
 $cliente = new Cliente();
 $cliente->update($documento, $nombre, $apellido, $direccion, $telefono);
 $this->index();


}

public function delete($documento)
{

 $cliente = new Cliente();
 $cliente->delete($documento);
 $this->index();


}


public function view($documento)
{
 $cliente = new Cliente();
 $data["documento"] = $documento;
 $data["cliente"] = $cliente->getCliente($documento);
 $data["titulo"] = "ver clientes";
 require_once "views/clientes/view.php";
}
    }

?>

