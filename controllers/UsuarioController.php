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
            #llamar al metodo save del modelo
            $usuario = new Usuario();

            #Pasar datos al modelo
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

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
            header("Location:".base_url.'usuario/registro'); #Redirige al registro
        }
    }
}