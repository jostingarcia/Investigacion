<?php 
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");

    //Inicializo la sesión
    session_start();

    $usuario = new Usuario();

    switch ($_GET["op"]) {
        case 'ingresar':
            $datos = $usuario->loguear_usuario($_POST["usuario"], $_POST["clave"]);
            if(is_array($datos) == true and count($datos) > 0){
                $_SESSION["id"] = $datos[0]["user_id"];
                $_SESSION["nombre"] = $datos[0]["user_nom"];
                echo "1";
            }else{
                echo "0";
            }

            break;

        case 'registrar':
            $datos = $usuario->get_usuario_x_us($_POST["user_us"], $_POST["user_correo"]);
            
            if(is_array($datos)==true and count($datos)==0){
                $datos1 = $usuario->create_usuario($_POST["user_usu"], $_POST["user_pass"],$_POST["user_nom"], $_POST["user_correo"]);
                
                echo json_encode($datos1);
            }else {
                echo json_encode($datos);
            }

            
            break;
    }
?>