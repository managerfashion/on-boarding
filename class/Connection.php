<?php require_once 'config.php';

    class Connection
    {
        public static function catchConnection()
        {
            $con = new PDO(DB_DRIVE . ':host=' . DB_HOSTNAME .';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $con;
        }
    }