<?php 
    require_once("../config/conexion.php");
    require_once("../models/apoderado.php");
    //Inicializo la sesión
    session_start();

    $apoderado = new Apoderado();

    switch ($_POST["op"]) {
        case 'listar':
            $datos = $apoderado->listar_apoderado();
            $data = Array();

            foreach($datos as $row){
                $sub_array =  array();
                $sub_array[] = $row["apo_id"];
                $sub_array[] = $row["apo_nom"];
                $sub_array[] = $row["apo_ape"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["apo_id"].');"  id="'.$row["apo_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["apo_id"].');"  id="'.$row["apo_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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
            $datos = $apoderado->listar_apoderado_x_id($_POST["apo_id"]);

            if(empty($_POST["apo_id"])){

                if(is_array($datos) == true and count($datos) == 0){
                
                    $apoderado->crear_apoderado($_POST["apo_nom"], $_POST["apo_ape"]);
    
                }
            }else{

                $apoderado->actualizar_apoderado($_POST["apo_id"], $_POST["apo_nom"], $_POST["apo_ape"]);

            }
            echo json_encode("success");
        break;

        case 'obtener':
            $apoderadoId = $_POST["apo_id"];
            $datos = $apoderado->listar_apoderado_x_id($apoderadoId);
        
            if (count($datos) > 0) {
                $apoderado = $datos[0];
        
                $resultado = array(
                    'apo_id' => $apoderado['apo_id'],
                    'apo_nom' => $apoderado['apo_nom'],
                    'apo_ape' => $apoderado['apo_ape']
                );
        
                echo json_encode($resultado);
            } else {
                // No se encontraron datos del profesor
                echo json_encode(null);
            }
        
            break;



        case 'eliminar':
            $apoderado->eliminar_apoderado($_POST["apo_id"]);
            echo json_encode("success");
        break;
    }


?>
