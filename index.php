<?php

/*
 * Controlador frontal que se encarga de recojer parametros get
 * y ver a que controlador pertenece cargar ese archivo y objeto
 * y posterior llama al metodo correspondiente
 */


require_once 'autoload.php'; #Tener acceso a todos los controladoresS

#Comprobar que llegan todos los controladores 
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
}else {
    echo 'La pagina no existe! (Validación de nombre_controlador)';
    exit(); #Deja de ejecutar el codigo sincrono
}

#Comprobar si existe el controlador
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    #Comprobar si existe el metodo en el controlador 
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) { 
        #Llama a una acción por Get en la url
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo 'La pagina no existe! Validacion de acción y/o Metodo';
    }

}else {
    echo 'La pagina no existe! Validacion de clase nombre_controlador';
}
