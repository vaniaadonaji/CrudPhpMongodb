<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_php_mongodb/vendor/autoload.php";

    class Conexion {
        public static function conectar() {
            try {
                $servidor = "127.0.0.1";
                $puerto = "27017";
                $BD = "crud";
                $cadenaConexion = "mongodb://" . 
                                    $servidor . ":" . 
                                    $puerto ."/". 
                                    $BD;
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }
    