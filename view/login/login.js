$(document).on("click", "#btningresar", function (){
    event.preventDefault();
    var usu_usu     = $('#user_usu').val();
    var usu_pass    = $('#user_pass').val();

    console.log("Usuario: " + usu_usu);
    console.log("Contraseña: " + usu_pass);

    if(usu_usu == '' || usu_pass == ''){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Ingrese todos los campos',
            showConfirmButton: false,
            timer:1500
        });  
    }else {
        $.post("../../controller/usuariocontrolador.php?op=ingresar",{usuario : usu_usu, clave : usu_pass},function (data) {
            if(data == 0){
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Las credenciales no coinciden',
                    showConfirmButton: false,
                    timer:1500
                });

            }else{
                window.location.href="../administrador/index.php";
            }
        
        });
    }
});