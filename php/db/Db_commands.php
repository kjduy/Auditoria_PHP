<?php
require 'Db_credentials.php';
class Db_commands{

    function c_get_query($query_command){
        $DB = new Db_credentials();
        $connection= @mysqli_connect($DB->getDb_host(),$DB->getDb_user(),$DB->getDb_pass(),$DB->getDb_name()) 
        or die('Error, no se puede conectar con la base de datos');
    
        $query = mysqli_query($connection, $query_command);
        mysqli_close($connection);
        return $query;
    }

    function c_get_queries($query_command){
        $DB = new Db_credentials();
        $connection= @mysqli_connect($DB->getDb_host(),$DB->getDb_user(),$DB->getDb_pass(),$DB->getDb_name()) 
        or die('Error, no se puede conectar con la base de datos');
    
        $query = mysqli_multi_query($connection, $query_command);
        mysqli_close($connection);
        return $query;
    }

    function c_pdo_query() {        		
        $DB = new Db_credentials();
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".$DB->getDb_host()."; dbname=".$DB->getDb_name(), $DB->getDb_user(), $DB->getDb_pass(), $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }

    function c_get_ip(){
        //$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
        $ip = '000';
        return $ip;
    }

}
