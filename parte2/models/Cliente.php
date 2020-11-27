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
            $sql = "SELECT * FROM usuario WHERE rol = 'Cliente' ";
                   
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

    
        public function update($numeroDocumento, $nombre, $apellido, $telefono, $direccion, $email)
        {
            $sql = "UPDATE usuario SET  nombre = '$nombre', apellido = '$apellido', telefono = '$telefono' , direccion = '$direccion', email = '$email'  WHERE numeroDocumento = '$numeroDocumento'";
            $resultado = $this->db->query($sql);
        }

        public function getUsuario($numeroDocumento)
        {
            $sql =  "SELECT * FROM usuario  WHERE numeroDocumento = '$numeroDocumento'";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }
        public function view($numeroDocumento)
        {   
            $sql = "SELECT * FROM usuario WHERE numeroDocumento = '$numeroDocumento'";
            $resultado = $this->db->query($sql);
        }
    
        public function delete($numeroDocumento)
        {
            
            $sql = "DELETE FROM usuario  WHERE numeroDocumento = '$numeroDocumento' ";
            $resultado = $this->db->query($sql);
        }  
    }

?>