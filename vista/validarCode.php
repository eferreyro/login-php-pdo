<?php
include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

header('Content-type: apllication/json');

$resultado = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txtUsuario"])&&isset($_POST["txtPassword"])){
        $txtUsuario = validar_campo($_POST["txtUsuario"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);
    
        $resultado = array("estado" => "true");
        
        if( UsuarioControlador::login($txtUsuario, $txtPassword)){
            return print(json_encode($resultado));
        }
    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));