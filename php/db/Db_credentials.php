<?php
class Db_credentials
{
    /*Cambia las credenciales de estos campos para conectar a una red local*/ 
    private $db_host='localhost';
    private $db_user='admin';
    private $db_pass='admin';
    private $db_name='cbe_proyecto';

    function getDb_host(){return $this->db_host;}
    function getDb_user(){return $this->db_user;}
    function getDb_pass(){return $this->db_pass;}
    function getDb_name(){return $this->db_name;}
}
