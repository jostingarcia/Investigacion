<?php
    class Profesor extends Conectar
    {
        

        // Crear un nuevo profesor
        public function crear_profesor($prof_nom, $prof_ape, $prof_sue) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "INSERT tm_profesor (prof_nom, prof_ape, prof_sue,fech_crea,fech_modi,fech_elim,est) VALUES (?, ?, ?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prof_nom);
            $sql->bindValue(2, $prof_ape);
            $sql->bindValue(3, $prof_sue);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            
        }
    
        
        // Leer un profesor por ID
        public function listar_profesor_x_id($prof_id) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM tm_profesor WHERE prof_id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prof_id);
            $sql->execute();
    
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Listar profesores
        public function listar_profesor(){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM tm_profesor WHERE est = 1;";

            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        //Actualizar Profesores
        public function actualizar_profesor($prof_id, $prof_nom, $prof_ape, $prof_sue){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_profesor
                SET
                    prof_nom = ?,
                    prof_ape = ?,
                    prof_sue = ?,
                    fech_modi = now()
                WHERE
                    prof_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prof_nom);
            $sql->bindValue(2, $prof_ape);
            $sql->bindValue(3, $prof_sue);
            $sql->bindValue(4, $prof_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Eliminar Profesores
        public function eliminar_profesor($prof_id){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_profesor
                SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    prof_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prof_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function obtener(){
            global $pdo;
            $query = "SELECT * FROM tm_profesor";
            $statement = $pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

 
    }
    

?>