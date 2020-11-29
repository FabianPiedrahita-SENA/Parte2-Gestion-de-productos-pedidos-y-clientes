<?php

   class ProductoController
   {
       public function __construct()
       {
           require_once "models/Producto.php";

       }


       public function index()
       {
        $productos = new Producto();
           $data["productos"] = $productos->listar();
           //Cargar la vista
           require_once "views/productos/index.php";
       }
    


public function insert()
{
    require_once "views/productos/insert.php";
}

 
public function store()
{

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$precio = $_POST['precio'];



$producto = new Producto();
$producto->insert($nombre, $descripcion, $foto, $precio);
$this->index();


}



public function edit($identificador)
{
    
    $producto = new Producto();

    $data["identificador"] = $identificador;
    $data["producto"] = $producto->getProducto($identificador);
    $data["titulo"] = "Actualizar Producto";

    require_once "views/productos/edit.php";

}



public function update()
{

    $identificador = $_POST['identificador'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $foto = $_POST['foto'];
    $precio = $_POST['precio'];
   
    
    $producto = new Producto();
    $producto->update($identificador, $nombre, $descripcion, $foto, $precio);
    $this->index();

 
}

public function delete($identificador)
{

    $producto = new Producto();
    $producto->delete($identificador);
    $this->index();

 
}


public function view($identificador)
{
    $producto = new Producto();
    $data["identificador"] = $identificador;
    $data["producto"] = $producto->getProducto($identificador);
    $data["titulo"] = "ver Vistas";
    require_once "views/productos/view.php";
}




}
   ?>