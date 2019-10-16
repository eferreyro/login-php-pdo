<?php
include '../datos/UsuarioDao.php';

class UsuarioControlador{
    public static function  login($usuario,$password){
        //instanciamos un nuevo objeto Usuario desde UsuarioDao (Que está vinculado a la entidad Usuario.php)
        $obj_usuario = new Usuario();
        //Le paso los parametros de usuario y pasword
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);
        //Le mando los parametros a login de UsuarioDao
        return UsuarioDao::login($obj_usuario);

    }

}