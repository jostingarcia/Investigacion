<?php 
    class Usuario extends Conectar{

        public function loguear_usuario($usuario, $clave) {
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM tm_usuario WHERE user_usu = ? AND user_pass = ? AND est = 1;";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $usuario);
            $sql->bindValue(2, $clave);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function create_usuario ($user_us, $user_pass, $user_nom, $user_correo){
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "INSERT INTO tm_usuario (user_id, user_usu, user_pass, user_nom, user_correo, fech_crea, fech_modi, fech_elim, est) 
                    VALUES (NULL, ?, MD5(?), ?, ?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $user_us);
            $sql->bindValue(2, $user_pass);
            $sql->bindValue(3, $user_nom);
            $sql->bindValue(4, $user_correo);
            $sql->execute();

            $sql1 = "SELECT last_insert_id() AS 'user_id'; ";
            $sql1 = $conectar->prepare($sql1);
            $sql1->execute();
            return $resultado = $sql1->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_usuario_x_us($user_us, $user_correo){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario WHERE user_usu = ? OR user_correo = ? ;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$user_us);
            $sql->bindValue(2,$user_correo);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>