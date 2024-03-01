<?php 
    require_once("../config/conexion.php");
    require_once("../models/materia.php");
    //Inicializo la sesión
    session_start();

    $materia = new Materia();

    switch ($_POST["op"]) {
        case 'listar':
            $datos = $materia->listar_materia();
            $data = Array();

            foreach($datos as $row){
                $sub_array =  array();
                $sub_array[] = $row["mat_id"];
                $sub_array[] = $row["mat_nom"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["mat_id"].');"  id="'.$row["mat_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["mat_id"].');"  id="'.$row["mat_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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
            $datos = $materia->listar_materia_x_id($_POST["mat_id"]);

            if(empty($_POST["mat_id"])){

                if(is_array($datos) == true and count($datos) == 0){
                
                    $materia->crear_materia($_POST["mat_nom"]);
    
                }
            }else{

                $materia->actualizar_materia($_POST["mat_id"], $_POST["mat_nom"]);

            }
            echo json_encode("success");
        break;



        case 'obtener':
            $materiaID = $_POST["mat_id"];
            $datos = $materia->listar_materia_x_id($materiaID);
        
            if (count($datos) > 0) {
                $materia = $datos[0];
        
                $resultado = array(
                    'mat_id' => $materia['mat_id'],
                    'mat_nom' => $materia['mat_nom']

                );
        
                echo json_encode($resultado);
            } else {
                // No se encontraron datos del profesor
                echo json_encode(null);
            }
        
            break;

        case 'eliminar':
            $materia->eliminar_materia($_POST["mat_id"]);
            echo json_encode("success");
        break;
    }


?>
