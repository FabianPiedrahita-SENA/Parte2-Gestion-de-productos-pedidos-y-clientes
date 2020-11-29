<?php

    class HomeController
    {


        public function __construct()
        {
           // session_start();
        }

        public function index ()
        {
            if(!isset($_SESSION))
            {
                session_start();
            }
            if(isset($_SESSION["numeroDocumento"]))
            {

                 $data['titulo'] = "Sesion";
                 require_once "views/home/index.php";
            }
            else
            {
                header("location: index.php?control=usuario&action=verLogin");
            }
        }

   
    }


    
// /     public function index ()
// /   //     {
//     //         $data['titulo'] = "Proyecto";
//     //         require_once "views/usuario/login.php";
//     //     }

//     // }
?>

