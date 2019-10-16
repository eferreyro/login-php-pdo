<?php
//Usuario Data Access Object
include 'Conexion.php';
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion
{
    protected static $conexion;

    public static function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }
    private static function desconectar()
    {
        self::$conexion = null;
    }
    public static function login($usuario)
    {
        /**
         * Metodo que valida el Login
         * @param object $usuario
         * @return boolean
         */
        $query = "SELECT *
                  FROM usuarios 
                  WHERE usuario = :usuario 
                  AND password = :password";
        
        self::getConexion();
        //variable que recibe el resultado del QUERY
        $resultado = self::$conexion->prepare($query);

        //Paso los parametros de $resultado de la conexion como referencia?
        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        //Ejecuto la conexion PDO ya validada
        $resultado->execute();
        
        // Si el resultado es correcto, retorna TRUE, si no hay usuario retorna FALSE
        if($resultado->rowCount() > 0){
           $filas = $resultado->fetch(); //convierto resutlado en un arreglo
           //obtengo informacion de la BD y la compruebo por medio del objeto usuario y password
           if($filas["usuario"]==$usuario->getUsuario()
           && $filas["password"]==$usuario->getPassword()

           ){
            return true;
           }
        }
        return false;
    }
}