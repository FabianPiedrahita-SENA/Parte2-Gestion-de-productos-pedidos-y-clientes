<?php




class UsuarioController
{
    public function __construct()
    {
        require_once "models/Usuario.php";
        
            if(!isset($_SESSION))
                   {
                       session_start();
                   }
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

    
    

//public function roles1 (){


   
//store($numeroDocumento);
 //}



//}

     
  

    public function registrar()
    {
        $numeroDocumento = $_POST['numeroDocumento'];
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];


        
 



        echo'<script type="text/javascript">
        alert("Registro completado");
        window.location.href="index.php?control=usuario&action=verLogin";
        </script>';

        
       

        $usuario = new Usuario();
        $usuario->store($numeroDocumento,$rol, $nombre,$apellido,$telefono,$direccion, $email, $contrasenia);

       
        
       
        
    }

  
  
   
    

   

    public function login()
    {
          
   
       
        
        $numeroDocumento = $_POST['numeroDocumento'];
        $contrasenia = $_POST['contrasenia'];

        $usuario = new Usuario();
        $user = $usuario->consultarUsuario($numeroDocumento);
        //var_dump($user);
        
        if( $user == null )
        {
            //echo "Usuario no encontrado";
            $data["titulo"] = "Iniciar sesion";
            $data["error"] = "Usuario no encontrado";
            require_once "views/usuario/login.php";
        }
        else
        {
            //verificar contrseña
            if(password_verify($contrasenia, $user['contrasenia']))
            {

             
              $_SESSION["numeroDocumento"] = $user["numeroDocumento"];
              $_SESSION["rol"] = $user["rol"];
              //echo $_SESSION["numeroDocumento"];
              require_once "views/home/index.php";

                // //echo "Usuario autenticado";
                // $data["usuario"] = $user;
                // require_once "views/home/index.php";
            }
            else
            {
                //echo "Contraseña incorrecta";
                $data["titulo"] = "Iniciar sesion";
                $data["error"] = "Contraseña incorrecta";
                require_once "views/usuario/login.php";

               

                
        

            }
        }
    }
    public function logout()
    {
        unset($_SESSION["numeroDocumento"]);
        header("location: index.php?control=usuario&action=verLogin");
    }
}

?>