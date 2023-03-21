<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/yanez_crud_mongo/vendor/autoload.php";
    //require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_mongo/vendor/autoload.php";
    class Conexion {
        public function conectar() {
             try {
                $servidor = "127.0.0.1";
            $usuario = "mongoadmin";
            $password = "123456";
            $baseDatos = "crud";
            $puerto = "27017";

            $cadenaConexion = "mongodb://" .
                                $usuario . ":" .
                                $password . "@" .
                                $servidor . ":" . 
                                $puerto . "/" .
                                $baseDatos;
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
             } catch (\Throwable $th) {
                return $th->getMessage();
             }
        }
    }
?>