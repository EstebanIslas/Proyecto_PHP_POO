<?php

/*
 * Controlador frontal que se encarga de recojer parametros get
 * y ver a que controlador pertenece cargar ese archivo y objeto
 * y posterior llama al metodo correspondiente
 */

session_start(); #Tener la sesion inicializada todo el proyecto
require_once 'autoload.php'; #Tener acceso a todos los controladoresS
require_once 'config/db.php'; #Acceso a la DB
require_once 'config/parameters.php'; #importar la constante base_url
require_once 'helpers/utils.php'; #Importar las librerias/metodos de ayuda
require_once 'views/layout/header.php'; #Acceso al header
require_once 'views/layout/sidebar.php'; #Acceso la barra lateral

#Funcion para llamar controlador de errores
function show_error()
{
    #Redireccionar al controlador de errores
    $error = new errorController();
    $error->index();
}

#Comprobar que llegan todos los controladores 
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default; #Redirigir pagina a la predeterminada 
}
else {
    show_error();
    exit();
}

#Comprobar si existe el controlador
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    #Comprobar si existe el metodo en el controlador 
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) { 
        #Llama a una acción por Get en la url
        $action = $_GET['action'];
        $controlador->$action();
    }elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $default = action_default;
        $controlador->$default();
    }else {
        show_error();
    }

}else {
    show_error();
}

require_once 'views/layout/footer.php'; #Acceso al pie de pagina 