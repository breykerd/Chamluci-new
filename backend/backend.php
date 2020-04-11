<?php

require 'connection.php';

setlocale(LC_TIME,"es_ES");
//incluir Conexion a base de datos
$mysqli= new Conexion();




//clase que busca la informacion de la empresa y de contacto


class laEmpresa extends Conexion
{
	    public function Empresa()
    {
        $mysqli= new Conexion();
        $resultadoLaEmpresa=$mysqli->query("SELECT * FROM laempresa");
        return $resultadoEmpresa=$resultadoLaEmpresa->fetch_assoc();
        $resultadoEmpresa->free();
        mysqli::close;
    }
    	    public function contacto()
    {
        $mysqli= new Conexion();
        $resultadoContacto=$mysqli->query("SELECT * FROM contaco ");
        return $resultadoDeContacto=$resultadoContacto->fetch_assoc();
        $resultadoDeContacto->free();
        mysqli::close;
    }
    
    public function seoGeneral()
    {
        $mysqli= new Conexion();
        $resultadoseo=$mysqli->query("SELECT * FROM seogeneral ");
        return $resultadoDeseo=$resultadoseo->fetch_assoc();
        $resultadoDeseo->free();
        mysqli::close;
    }
}

//class que controla todos los datos del Blog

class Blog extends Conexion
{
	 public function blog()
    {
        $mysqli= new Conexion();
        $resultadoBlog=$mysqli->query("SELECT * FROM blog");
        while($resultadoblog=$resultadoBlog->fetch_assoc())
        {
            $listaBlog[]=$resultadoblog;
        };
        return $listaBlog;
        $listaBlog->free();
        mysqli::close;
    }

    public function blogReciente()
    {
        $mysqli= new Conexion();
        $resultadoBlogRecientes=$mysqli->query("SELECT * FROM blog order by id desc");
        while($resultadoBlogReciente=$resultadoBlogRecientes->fetch_assoc())
        {
            $listaBlogReciente[]=$resultadoBlogReciente;
        };
        return $listaBlogReciente;
        $listaBlogReciente->free();
        mysqli::close;
    }

      public function blogIndividual($id)
    {
        $mysqli= new Conexion();
        $resultadoBlogIndividual=$mysqli->query("SELECT * FROM blog where id='$id' ");
        return $resultadoblogIndividual=$resultadoBlogIndividual->fetch_assoc();
        $resultadoblogIndividual->free();
        mysqli::close;
    }
}

//class category
class Category extends Conexion{
    //lista de categorias
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
    
    //datos de categoria via id
    public function datosCategoria($idCategoria)
    {
        $mysqli= new Conexion();
        $resultadoCategoriaUnica=$mysqli->query("SELECT * FROM categorias WHERE id= '$idCategoria' ");
        return $resultadoCategoriaU=$resultadoCategoriaUnica->fetch_assoc();
        $resultadoCategoriaU->free();
        mysqli::close;
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

    //datos de producto en especifico
     public function datosProducto($idProducto)
    {
        $mysqli= new Conexion();
        $resultadoProductoUnico=$mysqli->query("SELECT * FROM productos WHERE id= '$idProducto' ");
        return $resultadoProductoU=$resultadoProductoUnico->fetch_assoc();
        $resultadoProductoU->free();
    }

    //datos de productos segun id de categoria
         public function productosCategoria($idCategoria)
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
    //certificados
     public function certificados($idCertificado){
        $mysqli=new Conexion();
        $resultadoConsulta=$mysqli->query("SELECT * FROM certificados WHERE idCertificado='$idCertificado'");
        return $resultadoCertificado=$resultadoConsulta->fetch_assoc();
        $resultadoCertificado->free();
        mysqli::close; 
    }
    //garantias
    public function garantias($idGarantias){
        $mysqli=new Conexion();
        $resultadoConsultas=$mysqli->query("SELECT * FROM garantias WHERE idGarantias='$idGarantias'");
        return $resultadoGarantia=$resultadoConsultas->fetch_assoc();
        $resultadoGarantia->free();
        mysqli::close; 
    }
    
    
}

