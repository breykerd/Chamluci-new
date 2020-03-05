<?php
require('connection.php');

setlocale(LC_TIME,"es_ES");
//incluir Conexion a base de datos
$mysqli= new Conexion();

class categorias extends Conexion{
    public function listarCategorias()
    {
        $mysqli= new Conexion();
        $resultadocategorias=$mysqli->query("SELECT * FROM categorias ");
        while($resultadocategoria=$resultadocategorias->fetch_assoc())
        {
            $listacategorias[]=$resultadocategoria;
        };
        return $listacategorias;
        $listacategorias->free();
        mysqli::close;
    }
}


?>