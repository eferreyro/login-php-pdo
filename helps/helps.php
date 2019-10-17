<?php

/**validaciones
 * @param    input $campo recibe un parametro de entrada de tipo POST
 * @return   string limpio
 * */
function validar_capo($campo){
    $campo = trim($campo); //trim limpia los campos
    $campo =stripslashes($campo); //impide que pongan barras slash
    $campo = htmlspecialchars($campo); //impide que pongan caracteres html

    return $campo;
}