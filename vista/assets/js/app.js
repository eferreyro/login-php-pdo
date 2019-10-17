$(document).ready(function(){
   $("#loginForm").bind("submit", function(){
    //Ajax
    $.ajax({
        type:$(this).attr("method"), //Del formulario loginForm capturo el method POST
        url:$(this).attr("action"), //Del formulario loginForm capturo la URL validarCode.php
        data:$(this).serialize(), //captura los campos que tenga el formulario y lo serializa.
        success:function(response){ //Cuando la peticion sea correcta (los campos llenos)
            if(response.estado == "true"){           
                Swal.fire({
                  position: 'center',
                  type: 'success',
                  title: 'Bienvenido!',
                  showConfirmButton: false,
                  timer: 1500
                  
                }),      
                document.location.href = 'admin.php'; 
            }else{
                Swal.fire({
                    title: 'Error!',
                    text: 'Usuario o Clave no son correctos',
                    type: 'error',
                    confirmButtonText: 'Reintentar'
                  }),function(isConfirm) {
                    document.location.href="/login.html"
               }
            }
        },
        error:function(){//Cuando se produce un error en el envio de formulario
        }
    });
    return false; //cancelamos el envio de login desde otra pagina
    

   });
});