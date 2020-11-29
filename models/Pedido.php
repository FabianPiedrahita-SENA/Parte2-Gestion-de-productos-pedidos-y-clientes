<?php

class Pedido
{
    private $db;
    private $pedidos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->pedidos = array();
    }

    public function listar()
    {
        $sql = "SELECT * FROM pedido";
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
            $this->pedidos[] = $row;
        }
        return $this->pedidos;
    }

    public function insert($identificador, $fecha, $valor, $estado, $numeroDocumentoCliente, $numeroDocumentoDomiciliario, $idCarroCompras)
    {
        $sql = "INSERT INTO pedido  (identificador, fecha, valor, estado, numeroDocumentoCliente, numeroDocumentoDomiciliario, idCarroCompras) VALUES ('$identificador', '$fecha', '$valor', '$estado', '$numeroDocumentoCliente, $numeroDocumentoDomiciliario, $idCarroCompras')";
        $this->db->query($sql);
    }

    public function update($identificador, $fecha, $valor, $estado, $numeroDocumentoCliente, $numeroDocumentoDomiciliario, $idCarroCompras)
    {
        $sql ="UPDATE pedido SET fecha = $fecha, valor = $valor , estado = '$estado', numeroDocumentoCliente = '$numeroDocumentoCliente', numeroDocumentoDomiciliario =' $numeroDocumentoDomiciliario', idCarroCompras = '$idCarroCompras' WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function delete($identificador)
    {
        $sql = "DELETE FROM pedido WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function view($identificador)
    {
        $sql = "SELECT FROM pedido WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function getPedido($identificador)
    {
        $sql =  "SELECT * FROM pedido  WHERE identificador = '$identificador'";
        "FROM pedido " . 
        "WHERE pedido.identificador = $identificador";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}

?>