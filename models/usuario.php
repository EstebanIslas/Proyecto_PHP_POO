<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;

    #Acceso a la base de Datos
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    #end


    #Getters y Setters
    function getId(){
        return $this-> id;
    }
    
    function getNombre(){
        return $this-> nombre;
    }

    function getApellidos(){
        return $this-> apellidos;
    }

    function getEmail(){
        return $this-> email;
    }
    function getPassword(){
        return $this-> password;
    }
    
    function getRol(){
        return $this-> rol;
    }

    function getImagen(){
        return $this-> imagen;
    }

    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos){
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email){
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password){
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function setRol($rol){
        $this->rol = $rol;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    /* METODOS DE LA BD */

    public function save()
    {
        #Interpolación con la consulta
        $sql = "INSERT INTO usuarios VALUES(null, '{$this->getNombre()}',
        '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}',
        'user', null);";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}