<?php
    // Include the autoloader
    require '../../../vendor/autoload.php';

    // Load environment variables from .env file
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    class Dbh {
        protected function connect(){
            try{
                $host = $_ENV['AWS_RS_ENDPOINT'];
                $db_name = $_ENV['AWS_RDS_DB_NAME'];
                $username = $_ENV['AWS_RDS_USERNAME'];
                $password = $_ENV['AWS_RDS_PASSWORD'];

                $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
                $dbh = new PDO($dsn, $username, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $dbh;
            }
            catch(PDOException $e){
                print "Error:" .$e->getMessage() . "<br/>";
                die();
            }
        }
    }