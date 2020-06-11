<?php

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
            var_dump($_POST);
        }
    }
}