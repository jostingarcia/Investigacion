<?php
    class Estudiante extends Conectar
    {
        

        // Crear un nuevo profesor
        public function crear_estudiante($estu_nom, $estu_grup, $estu_ape) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "INSERT tm_estudiante (estu_nom, estu_grup, estu_ape,fech_crea,fech_modi,fech_elim,est) VALUES (?, ?, ?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $estu_nom);
            $sql->bindValue(2, $estu_grup);
            $sql->bindValue(3, $estu_ape);
            
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            
        }
    
        // Leer un profesor por ID
        public function listar_estudiante_x_id($estu_id) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM tm_estudiante WHERE estu_id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $estu_id);
            $sql->execute();
    
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Listar profesores
        public function listar_estudiante(){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM tm_estudiante WHERE est = 1;";

            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        //Actualizar Profesores
        public function actualizar_estudiante($estu_id, $estu_nom, $estu_grup, $estu_ape){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_estudiante
                SET
                    estu_nom = ?,
                    estu_grup= ?,
                    estu_ape = ?,
                    fech_modi = now()
                WHERE
                    estu_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $estu_nom);
            $sql->bindValue(2, $estu_grup);
            $sql->bindValue(3, $estu_ape);
            $sql->bindValue(4, $estu_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Eliminar Profesores
        public function eliminar_estudiante($estu_id){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_estudiante
                SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    estu_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $estu_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function obtener(){
            global $pdo;
            $query = "SELECT * FROM tm_estudiante";
            $statement = $pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

 
    }
    


    

?>