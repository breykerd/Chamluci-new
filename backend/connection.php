<?php
//code by breykerd of Tecnoblack

//Conexion 
//error_reporting(0);
class Conexion extends mysqli {

    public function __construct(){
        parent::__construct('localhost','root','','newdatabasetwo');
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die('Error con la conexion') : $mysqli = 'Conectado';
        unset ($mysqli);

    }
    
}



$urlImg='adminChamluci/img/';
?>