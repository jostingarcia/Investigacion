
<?php

class Conectar {
   
    protected $dbh;
    protected $host = "localhost";
    protected $usuario = "root";
    protected $contrasenia = "";
    protected $base_de_datos = "base_de_datos";

    protected function Conexion()
    {
        try{
            $conectar = $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->base_de_datos", $this->usuario, $this->contrasenia);
            return $conectar;
        }catch(Exception $e){
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}

