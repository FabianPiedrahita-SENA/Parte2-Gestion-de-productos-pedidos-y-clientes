<?php 

class Usuario
{
   
    private $numeroDocumento;
    private $rol;
    private $nombre;
    private $apellido;
    private $telefono;
    private $direccion;
    private $email;
    private $estado;
    private $contrasenia;

    public function __construct()
    {
        $this->db = Conectar::conexion();
    }

    public function store($numeroDocumento,$rol, $nombre,$apellido,$telefono,$direccion, $email,  $contrasenia)
    {
        $nuevaContrasenia = password_hash($contrasenia, PASSWORD_ARGON2I);
        
        $sql = "INSERT INTO usuario (numeroDocumento, rol, nombre, apellido, telefono, direccion, email, estado, contrasenia)
                VALUES ('$numeroDocumento', '$rol', '$nombre','$apellido','$telefono','$direccion', '$email', '$nuevaContrasenia')";
                
        $this->db->query($sql);
       
        

                if($rol === "Domiciliario" ) 
                {

                    $sql = "INSERT INTO usuario (numeroDocumento, rol, nombre, apellido, telefono, direccion, email, estado, contrasenia)
                    VALUES ('$numeroDocumento', '$rol', '$nombre','$apellido','$telefono','$direccion', '$email', 'Libre', '$nuevaContrasenia')";
                
                    $this->db->query($sql);


                    $sql = "INSERT INTO domiciliario (numeroDocumento)
                    VALUES ('$numeroDocumento')";
                
                    $this->db->query($sql);

                }
                else if($rol === "Cliente")
                {
                    
                    $sql = "INSERT INTO usuario (numeroDocumento, rol, nombre, apellido, telefono, direccion, email, estado, contrasenia)
                    VALUES ('$numeroDocumento', '$rol', '$nombre','$apellido','$telefono','$direccion', '$email', 'Activo', '$nuevaContrasenia')";
                
                    $this->db->query($sql);
                    
                    $sql = "INSERT INTO cliente (numeroDocumento)
                    VALUES ('$numeroDocumento')";
                
                    $this->db->query($sql);
                }
                else
                {
                    $sql = "INSERT INTO usuario (numeroDocumento, rol, nombre, apellido, telefono, direccion, email, estado, contrasenia)
                    VALUES ('$numeroDocumento', '$rol', '$nombre','$apellido','$telefono','$direccion', '$email', 'Activo', '$nuevaContrasenia')";
                
                    $this->db->query($sql);

                     
                    $sql = "INSERT INTO administrador (numeroDocumento)
                    VALUES ('$numeroDocumento')";
                
                    $this->db->query($sql);
                }
       
    }
    public function consultarUsuario($numeroDocumento)
    {
        $sql = "SELECT * FROM usuario WHERE numeroDocumento = $numeroDocumento";
        $row = $this->db->query($sql);
        $objetoUsuario = $row->fetch_assoc();
        return $objetoUsuario;
    }
    
}

?>

