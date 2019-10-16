$(document).ready(function(){
   $("#loginForm").bind("submit", function(){
    //Ajax
    $.ajax({
        type:$(this).attr("method"), //Del formulario loginForm capturo el method POST
        url:$(this).attr("action"), //Del formulario loginForm capturo la URL validarCode.php
        data:$(this).serialize(), //captura los campos que tenga el formulario y lo serializa.
        success:function(){ //Cuando la peticion sea correcta (los campos llenos)
            alert("conectado");
        },
        error:function(){//Cuando se produce un error en el envio de formulario
            alert("error");
        }
    });
    return false; //cancelamos el envio de login desde otra pagina
    

   });
});