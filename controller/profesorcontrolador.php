<?php 
    require_once("../config/conexion.php");
    require_once("../models/profesor.php");
    //Inicializo la sesión
    session_start();

    $profesor = new Profesor();

    switch ($_POST["op"]) {
        case 'listar':
            $datos = $profesor->listar_profesor();
            $data = Array();

            foreach($datos as $row){
                $sub_array =  array();
                $sub_array[] = $row["prof_id"];
                $sub_array[] = $row["prof_nom"];
                $sub_array[] = $row["prof_ape"];
                $sub_array[] = $row["prof_sue"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["prof_id"].');"  id="'.$row["prof_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["prof_id"].');"  id="'.$row["prof_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho" => 1,
                "iTotalRecords" => count($data),
                "iTotalDisplayRecords" => count($data),
                "aaData" => $data
            );
             

            echo json_encode($results);
        
        break;


        case 'guardaryeditar':
            $datos = $profesor->listar_profesor_x_id($_POST["prof_id"]);

            if(empty($_POST["prof_id"])){

                if(is_array($datos) == true and count($datos) == 0){
                
                    $profesor->crear_profesor($_POST["prof_nom"], $_POST["prof_ape"], $_POST["prof_sue"]);
    
                }
            }else{

                $profesor->actualizar_profesor($_POST["prof_id"], $_POST["prof_nom"], $_POST["prof_ape"], $_POST["prof_sue"]);

            }
            echo json_encode("success");
        break;

        case 'obtener':
            $profesorId = $_POST["prof_id"];
            $datos = $profesor->listar_profesor_x_id($profesorId);
        
            if (count($datos) > 0) {
                $profesor = $datos[0];
        
                $resultado = array(
                    'prof_id' => $profesor['prof_id'],
                    'prof_nom' => $profesor['prof_nom'],
                    'prof_ape' => $profesor['prof_ape'],
                    'prof_sue' => $profesor['prof_sue']
                );
        
                echo json_encode($resultado);
            } else {
                // No se encontraron datos del profesor
                echo json_encode(null);
            }
        
            break;
        
        

        case 'eliminar':
            $prof_id = $_POST["prof_id"];
            $profesor->eliminar_profesor($prof_id);
            // Realizar las acciones necesarias después de eliminar el profesor, como redireccionar a otra página
            echo json_encode("success");
            break;
    }


?>
