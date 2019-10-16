<?php
class Conexion{
 //Metodo estatico de conexion a la base de datos

 public static function conectar(){
    try {
        //funcion $cn (connect)
        $cn = new PDO("mysql:host=localhost; dbname=login-php","root", "H4x0R");
       return $cn; //Retorna una conexion PDO

    } catch (PDOException $ex) {
        die($ex->getMessage());
    }
}
}