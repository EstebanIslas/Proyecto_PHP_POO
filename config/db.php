<?php

/*
 * Conexion a la base de datos con metodos estaticos 
*/

class Database{

    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'tienda_master');
        $db->query("SET NAMES 'utf-8'"); #Consulta que devuelve el utf-8 sin problema
        return $db;
    }
}