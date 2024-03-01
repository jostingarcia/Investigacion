<?php
    class Materia extends Conectar
    {
        

        // Crear un nuevo profesor
        public function crear_Materia($mat_nom) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "INSERT tm_materia (mat_nom, fech_crea,fech_modi,fech_elim,est) VALUES (?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $mat_nom);
                $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            
        }
    
        // Leer un profesor por ID
        public function listar_materia_x_id($mat_id) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM tm_materia WHERE mat_id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $mat_id);
            $sql->execute();
    
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Listar profesores
        public function listar_materia(){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM tm_materia WHERE est = 1;";

            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        //Actualizar Profesores
        public function actualizar_materia($mat_id, $mat_nom){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_materia
                SET
                    mat_nom = ?,
                    fech_modi = now()
                WHERE
                    mat_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $mat_nom);
            $sql->bindValue(2, $mat_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Eliminar Profesores
        public function eliminar_materia($mat_id){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_materia
                SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    mat_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $mat_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function obtener(){
            global $pdo;
            $query = "SELECT * FROM tm_materia";
            $statement = $pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

 
    }
    


    

?>