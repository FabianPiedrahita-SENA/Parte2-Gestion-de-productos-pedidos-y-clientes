<?php

    class Cliente
    {
        private $db;
        private $clientes;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->clientes = array();
        }

        public function listar()
        {
            $sql = "SELECT * FROM cliente";
            $resulatado = $this->db->query($sql);
            if(!$resulatado)
            {
                echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

                echo "Eror: La ejecución de la consulta falla debido a :\n";
                echo "Query : " . $sql . "\n";
                echo "Errno" . $mysqli->errno . "\n" ;
                echo "Error" . $mysqli->error . "\n" ;
                exit;
            }
            while ($row = $resulatado->fetch_assoc()) 
            {
                $this->clientes[] = $row;
            }
            return $this->clientes;
        }

        public function insert($documento, $nombre, $apellido, $direccion, $telefono)
        {
            $sql = "INSERT INTO cliente (documento, nombre, apellido, direccion, telefono) VALUES ('$documento', '$nombre', '$apellido', '$direccion', '$telefono')";
            $this->db->query($sql);
        }
        public function update( $nombre, $apellido, $direccion, $telefono)
        {
            $sql = "UPDATE cliente SET documento = '$documento', nombre = '$nombre', apellido = '$apellido', direccion = '$direccion' , telefono = '$telefono' WHERE documento = $documento";
            $resultado = $this->db->query($sql);
        }
    
        public function delete($documento)
        {
            $sql = "DELETE FROM cliente  WHERE documento = $documento";
            $resultado = $this->db->query($sql);
        }
    
    
    
        public function view($documento)
        {
            $sql = "SELECT FROM cliente WHERE documento = $documento";
            $resultado = $this->db->query($sql);
        }
    
    
    
        public function getCliente($documento)
        {
            $sql = "SELECT * FROM cliente WHERE documento = $documento";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }
    }

?>