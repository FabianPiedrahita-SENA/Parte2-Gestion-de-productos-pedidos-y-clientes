<?php 

    class HomeController
    {
        public function __construct()
        {

        }

        public function index()
        {
            $data["titulo"] = "Proyecto Final";
            require_once "views/usuario/login.php";
        }
    }

?>