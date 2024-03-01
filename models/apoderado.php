<?php
    class Apoderado extends Conectar
    {
        

        // Crear un nuevo profesor
        public function crear_apoderado($apo_nom, $apo_ape) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "INSERT tm_apoderado (apo_nom, apo_ape, fech_crea, fech_modi, fech_elim, est) VALUES (?, ?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $apo_nom);
            $sql->bindValue(2, $apo_ape);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            
        }
    
        // Leer un profesor por ID
        public function listar_apoderado_x_id($apo_id) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM tm_apoderado WHERE apo_id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $apo_id);
            $sql->execute();
    
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Listar profesores
        public function listar_apoderado(){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM tm_apoderado WHERE est = 1;";

            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        //Actualizar Profesores
        public function actualizar_apoderado($apo_id, $apo_nom, $apo_ape){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_apoderado
                SET
                    apo_nom = ?,
                    apo_ape= ?,
                    fech_modi = now()
                WHERE
                    apo_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $apo_nom);
            $sql->bindValue(2, $apo_ape);
            $sql->bindValue(3, $apo_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Eliminar Profesores
        public function eliminar_apoderado($apo_id){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "UPDATE tm_apoderado
                SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    apo_id = ?";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $apo_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function obtener(){
            global $pdo;
            $query = "SELECT * FROM tm_apoderado";
            $statement = $pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

 
    }
    


    

?>