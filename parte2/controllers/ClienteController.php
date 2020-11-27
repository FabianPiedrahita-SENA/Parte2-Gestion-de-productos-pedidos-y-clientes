<?php

    class ClienteController
    {
        public function __construct()
        {
            require_once "models/Cliente.php";
        }

        public function index()
        {
            $clientes = new Cliente();
            //cargar la vista
            $data["clientes"] = $clientes->listar();
            $data["titulo"] = "Clientes";
            require_once "views/clientes/index.php";
        }

        public function store()
        {

            $numeroDocumento = $_POST['numeroDocumento'];
            $rol = $_POST['rol'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
            $estado = $_POST['estado'];
            $contrasenia = $_POST['contrasenia'];
            
            $cliente = new Cliente();
            $cliente->insert($numeroDocumento,$rol, $nombre, $apellido, $telefono, $direccion, $email, $estado, $contrasenia);
            $this->index();
        }

        public function edit($numeroDocumento)
        {
        
            $cliente = new Cliente();

            $data["numeroDocumento"] = $numeroDocumento;
            $data["cliente"] = $cliente->getUsuario($numeroDocumento);
            $data["titulo"] = "Actualizar usuario";

        require_once "views/clientes/edit.php";

        }
        public function update()
        {

            $numeroDocumento = $_POST['numeroDocumento'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
        
            $cliente = new Cliente();
            $cliente->update($numeroDocumento, $nombre, $apellido, $telefono, $direccion, $email);
            $this->index();
        }

        public function delete($numeroDocumento)
        {           
            $cliente = new Cliente();
            $cliente->delete($numeroDocumento);
            $this->index();
        }
        
        public function view($numeroDocumento)
        {
            $clientes = new Cliente();
            $data["cliente"] = $clientes->getUsuario($numeroDocumento);
            $data["titulo"] = "Cliente";
            require_once "views/clientes/view.php";
        }
    }

?>

