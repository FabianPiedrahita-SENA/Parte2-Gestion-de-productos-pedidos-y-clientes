<?php

class Producto
{

    private $db;
    private $productos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->productos = array();
    }

    public function listar()
    {
        $sql = "SELECT * FROM producto";
        $resultado = $this->db->query($sql);
        if(!$resultado)
        {
            echo "Lo sentimos este sitio esta experimentado problemas.\n\n";

            echo "Error: La ejecucion de la consulta falla debido a :\n";
            echo "Query : " . $sql . "\n";
            echo "Errno" . $mysqli->errno . "\n";
            echo "Error" . $mysqli->error . "\n";
            exit;
        }

        while ($row = $resultado->fetch_assoc())
        {
            $this->productos[] = $row;
        }
        return $this->productos;
    }



    public function insert($nombre, $descripcion, $foto, $precio)
    {
        $sql = "INSERT INTO producto (nombre, descripcion, foto, precio)VALUES ('$nombre', '$descripcion', '$foto', '$precio')";
        $this->db->query($sql);
    }



    public function update($identificador, $nombre, $descripcion, $foto, $precio)
    {
        $sql = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', foto = '$foto' , precio = '$precio' WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function delete($identificador)
    {
        $sql = "DELETE FROM producto  WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }



    public function view($identificador)
    {
        $sql = "SELECT FROM producto WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }



    public function getProducto($identificador)
    {
        $sql = "SELECT * FROM producto WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
    


}

?>