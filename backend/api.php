<?php
require('connection.php');
require('backend.php');

if(isset($_POST['Consulta'])){
    $consult=$_POST['Consulta'];
}else{
    $consult="";
}

switch($consult){
    case'':
    //codigo a ejecutar
    break;
    default:
    //codigo a ejecutar
    break;
}

?>