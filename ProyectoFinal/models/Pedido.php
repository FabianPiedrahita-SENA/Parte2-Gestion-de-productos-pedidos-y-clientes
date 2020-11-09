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
        $sql = "SELECT pedido.identificador, pedido.fecha, pedido.valor, pedido.estado, pedido.numeroCliente  AS pedido" .
                "FROM pedido " . 
                "ORDER BY pedido.identificador asc";

         $resultado = $this->db->query($sql);
        if(!$resultado)
        {
            echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

            echo "Eror: La ejecución de la consulta falla debido a :\n";
            echo "Query : " . $sql . "\n";
            echo "Errno" . $mysqli->errno . "\n" ;
            echo "Error" . $mysqli->error . "\n" ;
            exit;
        }

        while ($row = $resultado->fetch_assoc())
        {
            $this->pedidos[] = $row;
        }
        return $this->pedidos;
    }

    public function insert($identificador, $fecha, $valor, $estado, $numeroCliente)
    {
        $sql = "INSERT INTO pedido  (identificador, fecha, valor, estado, numeroCliente) VALUES ('$identificador', '$fecha', '$valor', '$estado', '$numeroCliente')";
        $this->db->query($sql);
    }

    public function update($identificador, $fecha, $valor, $estado, $numeroCliente)
    {
        $sql ="UPDATE pedido SET fecha = $fecha, valor = $valor , estado = '$estado', numeroCliente = '$numeroCliente' WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pedido WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function view($id)
    {
        $sql = "SELECT FROM pedido WHERE identificador = $identificador";
        $resultado = $this->db->query($sql);
    }

    public function getProducto($identificador)
    {
        $sql = "SELECT pedido.identificador, pedido.fecha, pedido.valor, pedido.estado, pedido.numeroCliente  AS pedido" .
        "FROM pedido " . 
        "WHERE pedido.identificador = $identificador";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}

?>