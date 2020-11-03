<?php 

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/conexion.php";
require_once "controllers/ProductoController.php";


// $controlador = new ProductoControllers();
// $controlador->index();



if(isset($_GET['control']))
{
    $controlador = cargarControlador($_GET['control']);
    
    if(isset($_GET['action']))
    {
        if(isset($_GET['id']))
        {
            cargarAccion($controlador, $_GET['action'], $_GET['id']);   
        }
        else
        {
            cargarAccion($controlador, $_GET['action']);   
        }

     
    }
}
else
{

    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    cargarAccion($controlador, ACCION_PRINCIPAL);


}



?>
