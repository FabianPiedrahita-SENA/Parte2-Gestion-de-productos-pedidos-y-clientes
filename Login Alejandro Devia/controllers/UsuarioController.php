<?php




class UsuarioController
{
    public function __construct()
    {
        require_once "models/Usuario.php";
        
    }

    public function verLogin()
    {
        $data["titulo"] = "Iniciar sesión";
        require_once "views/usuario/login.php";
    }

    public function verRegistro()
    {
        $data["titulo"] = "Registro";
        require_once "views/usuario/registro.php";
    }

    public function registrar()
    {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];

        echo $cedula ."<br>";
        echo $nombre ."<br>";
        echo $email ."<br>";
        echo $contrasenia ."<br>";

        $usuario = new Usuario();
        $usuario->store($cedula, $nombre, $email, $contrasenia);
        
        //redireccionar
        header("location: index.php?control=usuario&action=verLogin");
    }

    public function login()
    {
        $cedula = $_POST['cedula'];
        $contrasenia = $_POST['contrasenia'];

        $usuario = new Usuario();
        $user = $usuario->consultarUsuario($cedula);
        //var_dump($user);
        
        if( $user == null )
        {
            //echo "Usuario no encontrado";
            $data["error"] = "Usuario no encontrado";
            require_once "views/usuario/login.php";
        }
        else
        {
            //verificar contrseña
            if(password_verify($contrasenia, $user['contrasenia']))
            {
                //echo "Usuario autenticado";
                $data["usuario"] = $user;
                header("location: views/usuario/valide.php");
            }
            else
            {
                //echo "Contraseña incorrecta";
                $data["error"] = "Contraseña incorrecta";
                require_once "views/usuario/login.php";
            }
        }
    }
}

?>