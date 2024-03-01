<?php 
    require_once("../config/conexion.php");
    require_once("../models/estudiante.php");
    //Inicializo la sesión
    session_start();

    $estudiante = new Estudiante();

    switch ($_POST["op"]) {
        case 'listar':
            $datos = $estudiante->listar_estudiante();
            $data = Array();

            foreach($datos as $row){
                $sub_array =  array();
                $sub_array[] = $row["estu_id"];
                $sub_array[] = $row["estu_nom"];
                $sub_array[] = $row["estu_grup"];
                $sub_array[] = $row["estu_ape"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["estu_id"].');"  id="'.$row["estu_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["estu_id"].');"  id="'.$row["estu_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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
            $datos = $estudiante->listar_estudiante_x_id($_POST["estu_id"]);

            if(empty($_POST["estu_id"])){

                if(is_array($datos) == true and count($datos) == 0){
                
                    $estudiante->crear_estudiante($_POST["estu_nom"], $_POST["estu_grup"], $_POST["estu_ape"]);
    
                }
            }else{

                $estudiante->actualizar_estudiante($_POST["estu_id"], $_POST["estu_nom"], $_POST["estu_grup"], $_POST["estu_ape"]);

            }
            echo json_encode("success");
        break;

        case 'obtener':
            $estudianteId = $_POST["estu_id"];
            $datos = $estudiante->listar_estudiante_x_id($estudianteId);
        
            if (count($datos) > 0) {
                $estudiante = $datos[0];
        
                $resultado = array(
                    'estu_id' => $estudiante['estu_id'],
                    'estu_nom' => $estudiante['estu_nom'],
                    'estu_ape' => $estudiante['estu_ape'],
                    'estu_grup' => $estudiante['estu_grup']
                );
        
                echo json_encode($resultado);
            } else {
                // No se encontraron datos del estudiante
                echo json_encode(null);
            }
        
            break;





        case 'eliminar':
            $estudiante->eliminar_estudiante($_POST["estu_id"]);
            echo json_encode("success");
        break;
    }


?>
