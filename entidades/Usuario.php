<?php
class Usuario{
 //Definimos cada variable de la tabla Usuarios como propiedad de una clase Usuario
 private $id;
 private $nombre;
 private $usuario;
 private $email;
 private $password;
 private $privilegio;
 private $fecha_registro;


 //Declarada la clase, generamos los Getters and Setters para PDO desde http://mikeangstadt.name/projects/getter-setter-gen/
 public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function getUsuario(){
    return $this->usuario;
}

public function setUsuario($usuario){
    $this->usuario = $usuario;
}

public function getEmail(){
    return $this->email;
}

public function setEmail($email){
    $this->email = $email;
}

public function getPassword(){
    return $this->password;
}

public function setPassword($password){
    $this->password = $password;
}

public function getPrivilegio(){
    return $this->privilegio;
}

public function setPrivilegio($privilegio){
    $this->privilegio = $privilegio;
}

public function getFecha_registro(){
    return $this->fecha_registro;
}

public function setFecha_registro($fecha_registro){
    $this->fecha_registro = $fecha_registro;
}

} 