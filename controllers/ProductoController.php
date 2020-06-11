<?php

#Clases de prueba

class productoController{
    public function index()
    {
        //echo 'Controlador Producto Accion index';
        /* Cargar una vista como predeterminada en el index*/
        require_once 'views/producto/destacados.php';
    }

    
}