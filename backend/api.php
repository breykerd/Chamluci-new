<?php

//archivos Requeridos
require('connection.php');
require('backend.php');

//clases Requeridas
$Category= new Category();



if(isset($_POST['Consulta'])){
    $consult=$_POST['Consulta'];
}else{
    $consult="";
}

switch($consult){
    case'Categoria':
    $categoryList=$Category->categoryList();
    echo $categoryList;
    break;
    default:
    //codigo a ejecutar
    break;
}

?>