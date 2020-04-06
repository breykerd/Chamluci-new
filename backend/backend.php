<?php

require 'connection.php';

setlocale(LC_TIME,"es_ES");
//incluir Conexion a base de datos
$mysqli= new Conexion();


//class category
class Category extends Conexion{
    public function categoryList()
    {
        $mysqli= new Conexion();
        $resultadocategorias=$mysqli->query("SELECT * FROM categorias ");
        while($resultadocategoria=$resultadocategorias->fetch_assoc())
        {
            $listacategorias[]=$resultadocategoria;
        };
        return $listacategorias;
    }
}

//class que controla todos los datos de la Productos
class Products extends Conexion
{
	 public function featuredProducts()
    {
        $mysqli= new Conexion();
        $resultadoProductos=$mysqli->query("SELECT * FROM productos WHERE destacado_inicio=1");
        while($resultadoProducto=$resultadoProductos->fetch_assoc())
        {
            $listaProductos[]=$resultadoProducto;
        };
        return $listaProductos;
        $listaProductos->free();
        mysqli::close;
    }

	 public function productosPie()
    {
        $mysqli= new Conexion();
        $resultadoProductos=$mysqli->query("SELECT * FROM productos WHERE destacado_footer=1");
        while($resultadoProducto=$resultadoProductos->fetch_assoc())
        {
            $listaProductos[]=$resultadoProducto;
        };
        return $listaProductos;
        $listaProductos->free();
        mysqli::close;
    }
     public function datosProducto($idProducto)
    {
        $mysqli= new Conexion();
        $resultadoProductoUnico=$mysqli->query("SELECT * FROM productos WHERE id= '$idProducto' ");
        return $resultadoProductoU=$resultadoProductoUnico->fetch_assoc();
        $resultadoProductoU->free();
    }
         public function productosDestacadosCategoria($idCategoria)
    {
        $mysqli= new Conexion();
        $resultadoProductosCategoria=$mysqli->query("SELECT * FROM productos WHERE id_cate='$idCategoria'");
        while($resultadoProductoCategoria=$resultadoProductosCategoria->fetch_assoc())
        {
            $listaProductosCategoria[]=$resultadoProductoCategoria;
        };
        return $listaProductosCategoria;
        $listaProductosCategoria->free();
        mysqli::close;
    }
    
     public function certificados($idCertificado){
        $mysqli=new Conexion();
        $resultadoConsulta=$mysqli->query("SELECT * FROM certificados WHERE idCertificado='$idCertificado'");
        return $resultadoCertificado=$resultadoConsulta->fetch_assoc();
        $resultadoCertificado->free();
        mysqli::close; 
    }
    public function garantias($idGarantias){
        $mysqli=new Conexion();
        $resultadoConsultas=$mysqli->query("SELECT * FROM garantias WHERE idGarantias='$idGarantias'");
        return $resultadoGarantia=$resultadoConsultas->fetch_assoc();
        $resultadoGarantia->free();
        mysqli::close; 
    }
    
    
}


?>