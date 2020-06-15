<?php

#Importa el modelo
require_once 'models/usuario.php';

#Clases de prueba

class usuarioController{
    public function index()
    {
        echo 'Controlador Usuario Accion index';
    }
    #Metodo para ingresar al formulario
    public function registro()
    {
        require_once 'views/usuario/registro.php';
    }
    public function save()
    {
        #Valida si existen los valores
        if (isset($_POST)) {
            
            #Validación Basica
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $apellidos && $email && $password) {
                #llamar al metodo save del modelo
                $usuario = new Usuario();

                #Pasar datos al modelo
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                #guardar en BD
                $save = $usuario->save();

                if ($save) {
                    #Crear una sesión
                    $_SESSION['register'] = "complete";
                    //echo "<h4>Usuario Registrado Correctamente!!</h4>";
                }else {
                    #Crear una Sesión
                    $_SESSION['register'] = "failed";
                    //echo "<h4>Error!! Fallo al registrar usuario</h4>"; 
                }
            } else {
                $_SESSION['register'] = "failed";
            }
            
            header("Location:".base_url.'usuario/registro'); #Redirige al registro
        }
    }
}