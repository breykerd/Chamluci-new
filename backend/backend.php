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


//class Ofertas

class Ofertas extends Conexion{
<<<<<<< HEAD
	public function ofertasDelMesOne(){
=======
>>>>>>> origin
		
		$fecha = date("Y-m-d");

		$mysqli = new Conexion();
<<<<<<< HEAD
		$resultadoOfertas=$mysqli->query("SELECT * FROM ofertas WHERE fechaFinal >= '$fecha' AND fechaInicio <= '$fecha' AND posicionOferta = 1 ");
=======
>>>>>>> origin
$filas =  	$resultadoOfertas->num_rows;
 if($filas != 0){

 
		while($resultadoOferta=$resultadoOfertas->fetch_assoc())
        {
            $listaOfertas[]=$resultadoOferta;
        };
        return $listaOfertas;
		
}else{
	return $filas;
}

	}
<<<<<<< HEAD


	public function ofertasDelMesTwo(){
		
		$fecha = date("Y-m-d");

		$mysqli = new Conexion();
		$resultadoOfertas=$mysqli->query("SELECT * FROM ofertas WHERE fechaFinal >= '$fecha' AND fechaInicio <= '$fecha' AND posicionOferta = 2 ORDER BY idOferta  DESC LIMIT 2");
$filas =  	$resultadoOfertas->num_rows;
 if($filas != 0){

 
		while($resultadoOferta=$resultadoOfertas->fetch_assoc())
        {
            $listaOfertas[]=$resultadoOferta;
        };
        return $listaOfertas;
		
}else{
	return $filas;
}

	}



=======
>>>>>>> origin
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


if (isset($_GET['funcion'])){
    $funcion=$_GET['funcion'];
 $funcion;
}else{
    $funcion='lol';
};

switch ($funcion) {
    //busca los productos para carritos

        case "ProductosParaCarrito":
        if (isset($_GET['id'])) {
			$id=$_GET['id'];
			$datos = explode(",", $id );
		}

		$productos="";
		$cantidad = count($datos);

		for($i=0; $i < $cantidad; $i++){
			$datosProducto = $mysqli->query("SELECT * FROM productos WHERE id = $datos[$i]" );
			$ProductosParaCarrito=mysqli_fetch_assoc($datosProducto);


$productos= $productos.
'<div class="col border shadow  cotizacion">
			<img src="adminchamluci/img/'.$ProductosParaCarrito["img1"].'"  alt="">
				<p>'.$ProductosParaCarrito["titulo"].'</p>
				<div class="cantidads">
					<p>cantidad</p>
					<input type="number" value="1" id="cantidad-'.$ProductosParaCarrito["id"].'" onkeyup="cambiarValor('.$ProductosParaCarrito["id"].');">
					<input type="hidden" name="idhidden" id="idhidden-'.$ProductosParaCarrito["id"].'" value="1">
				</div>
				<button class="buttom" onclick="eliminarProducto('.$ProductosParaCarrito["id"].');">
					Eliminar
				</button>
		</div>
		</br>';
			
		}
		echo $productos;
            
              

        break;


case "prubacotizacion";
		if(isset($_GET['datosFormulario'])){
			$datos = explode("," ,$_GET['datosFormulario']);
			$send = true;
		}else{
			$send = false;
			echo "datos no recibidos";
		}

		if($send==true){
$texto = "Que Tal ".$datos[1]." Su cotización fue enviada Satisfactoriamente ";

			$mensaje = [
				"estado"=> "1",
				"mensaje"=>$texto,
				"mensajeTwoModal"=>"Lo invitamos a ver nuestras otras categorías de productos"
			];

			echo json_encode($mensaje);
		}else{
$texto = "Que Tal ".$datos[1]." La Cotización no pudo ser enviada ";

			$mensaje = [
				"estado"=> "2",
				"mensaje"=>$texto,
				"mensajeTwoModal"=>"lo invitamos a intentar nuevamente el envió de la cotización o a comunicarse con nuestra central"
			];

			echo json_encode($mensaje);
		}	


break;






		//guarda el correo de suscripcion


case "suscribirse":
        if (isset($_GET['correo'])) {
            $correo=$_GET['correo'];
        }
        $fecha=date('Y-m-d');
        $hora=date('H:i');

                $datosProducto = $mysqli->query("INSERT INTO correos (id, nombre, correo, hora, fecha)
VALUES (null, '0', '$correo','$hora','$fecha')");
           

        break;

//envia el mensaje de el area de cotizacion

  case "envioMensaje":
        $codigo= substr(str_shuffle(str_repeat('0123456789',5)),0,7);
     
             if (isset($_POST['idProductos'])) {
                $idProductos=$_POST['idProductos'];
            }
            if (isset($_POST['valores'])) {
                $valores=$_POST['valores'];
            }
            if (isset($_POST['datosFormulario'])) {
                $datosFormulario=$_POST['datosFormulario'];
            }
            $cantidad=count($idProductos);



		
	


//$to = "ventas@corporacionchamluci.com";
$subject = "Área Cotización - Corporación Chamluci SAC  ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .="From:Corporacion Chamluci SAC-Area Cotizacion <ventas@corporacionChamluci.com>". "\r\n";
$headers .="Cc:".$datosFormulario[2]."\r\n";
 

$mensaje="<html lang='es'>
  <meta charset='UTF-8'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>    

	<body>
<table align='center'>
    <tr>
        <td>
<!-- comienzo del memsaje  -->



<table width='800' style='text-align:center;border-collapse:collapse;'>
<tr>
	<td colspan='2' style=' width:700px;font-family:Roboto; margin:0 auto;font-style: normal; background-color:#afca52; padding: 4%;'>
		<h1 style='text-align:center;font-size: 35px; display:inline;color: #fff'>Solicitud de Cotización </h1> 
	</td>
</tr>

<tr>
	<td colspan='2'>
		<img width='250' src='https://www.corporacionchamluci.com/assets/images/logoEmail.png' alt='Logo Corporacion Chamluci'>
	</td>
</tr>	
<tr>
	<td  colspan='2' style=' width:700px;font-family:Roboto; margin:0 auto;font-style: normal; background-color:#00b4eb; padding: 2%;'>
		<h1 style='text-align:center;font-size: 20px; display:inline;color: #fff'>Codigo de Operació: </h1> <h1 style='text-align:center;font-size: 20px; display:inline;background-color: #fff; color: #000; padding: 1%;'> ".$codigo."  </h1>
	</td>
</tr>

<tr>
	<td  style=' font-family:Roboto; margin:0 auto;font-style: normal;  padding: 0.5%;'>
		&nbsp;
	</td>
</tr>	
</table>


<table width='800' border='2' style=' font-family:Roboto;text-align:center;border-collapse:collapse; border:#afca52 2px solid; '>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Ruc:</td>
		<td style='background-color:#fff;font-size: 20px;'> ".$datosFormulario[0]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Nombre:</td>
		<td style='background-color:#fff;font-size: 20px;'>   ".$datosFormulario[1]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Correo:</td>
		<td style='background-color:#fff;font-size: 20px;'><a href='mailto: ".$datosFormulario[2]."' target='_blank'> ".$datosFormulario[2]."</a></td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Teléfono:</td>
		<td style='background-color:#fff;font-size: 20px;'>   ".$datosFormulario[3]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Mensaje:</td>
		<td style='background-color:#fff;font-size: 20px;text-align: left;'> ".$datosFormulario[4]." </td>
	</tr>
</table>



<table width='800'  style='text-align:center;border-collapse:collapse;'>
<tr>
	<td  style='font-family:Roboto; margin:0 auto;font-style: normal;  padding: 0.5%;'>
		&nbsp;
	</td>
</tr>
</table>
<table width='800' border='2' style='padding: 2%; font-family:Roboto;text-align:center;border-collapse:collapse; border:#00b4eb 2px solid; ' >
<tr>
	<td style='background-color:#00b4eb;color:#fff; font-size: 20px;'>Imagen </td>
	<td style='background-color:#00b4eb;color:#fff; font-size: 20px;'>Nombre Del Producto</td>
	<td style='background-color:#00b4eb;color:#fff; font-size: 20px;'>Cantidad</td>
</tr>


";
$Categoria=[];
for ($i=0; $i < $cantidad; $i++) { 
                $datosProducto = $mysqli->query("SELECT * FROM productos WHERE id='$idProductos[$i]'" );
                $ProductosCotizacion=mysqli_fetch_assoc($datosProducto);
                $mensaje.= "<tr>
                <td width='140'style='font-style: bold;font-size: 18px;'> <img  width='80' src='https://www.corporacionchamluci.com/adminchamluci/img/".$ProductosCotizacion['img1']."' width='100%'> </td>
<td width='580' style='font-style: bold;font-size: 18px;'>".$ProductosCotizacion['titulo']."</td>
<td width='70' style='font-style: bold;font-size: 18px;'> ".$valores[$i]." </td>
</tr>";
$categoria[$i] =  $ProductosCotizacion['id_cate'];

            }





$mensaje.="
</table>

<table width='800' style='padding: 5%; font-family:Roboto;text-align:center;border-collapse:collapse;  '>

	
<tr>
	<td colspan='2' style='background-color: #00b4eb; font-size: 25px; color:#fff; padding: 2%'>
		Visita nuestra página web <br><br>
		<a href='https://www.corporacionchamluci.com' style='background-color: #fff; font-size: 18px; color:#00b4eb; padding: 5px; text-decoration: none;' >CLICK AQUÍ</a>
	</td>
</tr>
<tr>
	<td style='font-size: 12px; color:#656565; padding: 2%'>
		Copyright © 2019 Corporación Chamluci, Todos los derechos reservados. 

	</td>
</tr>
</table>


<!-- Final del memsaje  -->

</td>
    </tr>
</table> 


	</body>
</html>";

$alcohol=0;
$otros=0;

for($d=0; $d< $cantidad; $d++){
	if($categoria[$d]==30){

	}else{
		$otros=1;
	}
	
}
if($otros==1){

	$comparador = $mysqli->query("SELECT comparador FROM emailRandom ");
	$row = mysqli_fetch_assoc($comparador);
	$compara=intval($row['comparador']);
	if ($compara==0){
		$to = "ventas@corporacionchamluci.com";
		$consulta = $mysqli->query("UPDATE emailRandom SET comparador='1' WHERE id='1' ");

	}else{
		$to = "ventas1@corporacionchamluci.com";
		$consulta = $mysqli->query("UPDATE emailRandom SET comparador='0' WHERE id='1' ");

	}


}else{
		$to = "ventas2@corporacionchamluci.com";
}
 echo json_encode($to);

//if(mail($to, $subject, $mensaje, $headers)){
    //echo"mensaje enviado".$to;
//};

$correo=$datosFormulario[2];
//echo json_encode($correo);
$clientes = $mysqli->query("SELECT * FROM correos WHERE correo='$correo'");

if (mysqli_num_rows($clientes)>0) {
    
}else{



$to2 = $datosFormulario[2];
$subject2 = "Bienvenido a Corporación Chamluci SAC";
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers2 .="From:Corporacion Chamluci SAC-Area de Contacto <ventas@corporacionChamluci.com>". "\r\n";



$mensaje2="	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr style='background-color:#afca52; text-align: center;' align='center'>
		<td>
			<table border='0' width='100%'>
				<tr>
					<td width='100%' align='center' style='font-weight: bold; color:#fff; font-size:200%;'>				

<h1 style='font-family: Roboto, Roboto, sans-serif; margin-block-end:0em;'>	
Bienvenido  	
</h1>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style='background-color: #fff; text-align: center; font-weight: bold; -webkit-background-clip: text; -webkit-text-fill-color: transparent; font: oblique bold 200% cursive; ' colspan='2'>
				<img src='https://corporacionchamluci.com/imagenes-Correos/logo.png' alt='' width='50%'>
		</td>
	</tr>
	<tr>
		<td style='background-color: #fff; color:#fff; font: oblique bold 100% cursive;'>
						s
		</td>
	</tr>
	<tr>
		<td  width='100%' style='background-color: #aeca52;'>
			<table border='0' width='80%' align='center'style='color: #fff;'>
				<tr>
					<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:200%; text-decoration: none;'>
						<a href='mailto:Ventas@corporacionchamluci.com' style='text-decoration: none; color:#fff'>Ventas@corporacionchamluci.com</a> 
						<br>
						947153316 / 984132072 / 934717709 / 947153188
					</td>		
				</tr>			
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<br>
		</td>
	</tr>
	<tr>
		<td  width='100%' >
			<table width='80%' align='center'style='color: #fff;'>
				<tr>
					<td  width='100%' align='center' style='color:#000; font-family: roboto; font-size:180%; padding: 2%; border: solid 3px #aeca52;' >
Le estamos enviando una invitación a nuestra página digital de Corporación Chamluci SAC, conócenos mejor y atrévete a explorar la gran variedad de productos que tenemos para ti de excelente calidad en accesorios para tus servicios higiénicos y accesorios de limpieza, aquí podrás encontrar la mejor forma segura y eficaz de realizar tus compras. ¡Gracias por contactarnos!
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<br>
		</td>
	</tr>
	<tr>
		<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:300%; background-color: #aeca52; '>
Línea institucional y artículos de limpieza 
		</td>
	</tr>
	<tr>
		<td style='background: linear-gradient(to bottom, #2195d0 0%, #2195d0 60%, #175a91 61%, #009bd3 84%,#175a91 100%);text-align:center;'>
		<br><br>
			<img src='https://corporacionchamluci.com/imagenes-Correos/EMAIL1.png' width='70%' alt=''>
		</td>
	</tr>
	<tr>
		<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:200%; background-color: #2195d0; padding: 2%; border: 5px,#2195d0'>
			<a  href='https://www.corporacionchamluci.com' style='background-color: #fff; padding: 1%; text-decoration: none; color:#2195d0; text-align:center;font-size: 200%'> Entra aqui</a>	
		</td>
	</tr>
	<tr>
		<td style='background: linear-gradient(to bottom, #2195d0 0%, #2195d0 60%, #175a91 61%, #009bd3 84%,#175a91 100%);text-align:center;'>
			<br><br>
			<img src='https://corporacionchamluci.com/imagenes-Correos/EMAIL2.png' width='70%' alt=''>
		</td>
	</tr>
	<tr>
		<td>
			<table width='100%' align='center' style='background-color:#aeca52 '>
		<tr style='text-align: center'>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/1.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/2.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/3.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/4.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/5.png' width='70%' alt=''>
			</td>
		</tr>
	<tr style='text-align: center;color: #fff; font-size: 150%; font-weight: bold;'>
			<td>
				Garantia
			</td>
			<td>
				Exelentes <br>Precios
			</td>
			<td>
				Atención <br>Personalizada 
			</td>
			<td>
			 	Stock <br> Permanente
			</td>
			<td>
				Delivery <br> Gratuito
			</td>
	</tr>
</table>";








if(mail($to2, $subject2, $mensaje2, $headers2)){
    echo"mensaje enviado";
};


 $fecha=date('Y-m-d');
        $hora=date('H:i');

                $datosProducto = $mysqli->query("INSERT INTO correos (id, nombre, correo, hora, fecha)
VALUES (null, '1', '$correo','$hora','$fecha')");
};



        break;




case "envioMensajeContacto":
        $codigo= substr(str_shuffle(str_repeat('0123456789',5)),0,7);
     
           
            if (isset($_POST['datosFormulario'])) {
                $datosFormulario=$_POST['datosFormulario'];
            }



$to = "ventas@corporacionchamluci.com";
$subject = "Área De Contacto - Corporación Chamluci SAC  ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .="From:Corporacion Chamluci SAC-Area Cotizacion <ventas@corporacionChamluci.com>". "\r\n";
$headers .="Cc:".$datosFormulario[2]."\r\n";
 
 $mensaje="<html lang='es'>
  <meta charset='UTF-8'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>    

	<body>
<table align='center'>
    <tr>
        <td>
<!-- comienzo del memsaje  -->



<table width='800' style='text-align:center;border-collapse:collapse;'>
<tr>
	<td colspan='2' style=' width:700px;font-family:Roboto; margin:0 auto;font-style: normal; background-color:#afca52; padding: 4%;'>
		<h1 style='text-align:center;font-size: 35px; display:inline;color: #fff'>Área De Contacto </h1> 
	</td>
</tr>

<tr>
	<td colspan='2'>
		<img width='250' src='https://www.corporacionchamluci.com/assets/images/logoEmail.png' alt='Logo Corporacion Chamluci'>
	</td>
</tr>	
<tr>
	<td  colspan='2' style=' width:700px;font-family:Roboto; margin:0 auto;font-style: normal; background-color:#00b4eb; padding: 2%;'>
		<h1 style='text-align:center;font-size: 20px; display:inline;color: #fff'>Codigo de Operació: </h1> <h1 style='text-align:center;font-size: 20px; display:inline;background-color: #fff; color: #000; padding: 1%;'> ".$codigo."  </h1>
	</td>
</tr>

<tr>
	<td  style=' font-family:Roboto; margin:0 auto;font-style: normal;  padding: 0.5%;'>
		&nbsp;
	</td>
</tr>	
</table>


<table width='800' border='2' style=' font-family:Roboto;text-align:center;border-collapse:collapse; border:#afca52 2px solid; '>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Ruc:</td>
		<td style='background-color:#fff;font-size: 20px;'> ".$datosFormulario[0]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Nombre:</td>
		<td style='background-color:#fff;font-size: 20px;'>   ".$datosFormulario[1]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Correo:</td>
		<td style='background-color:#fff;font-size: 20px;'><a href='mailto: ".$datosFormulario[2]."' target='_blank'> ".$datosFormulario[2]."</a></td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Teléfono:</td>
		<td style='background-color:#fff;font-size: 20px;'>   ".$datosFormulario[3]." </td>
	</tr>
	<tr>
		<td width='250' style='background-color:#afca52; color:#fff;padding:1.5%;font-size: 20px;'> Mensaje:</td>
		<td style='background-color:#fff;font-size: 20px;text-align: left;'> ".$datosFormulario[4]." </td>
	</tr>
</table>



<table width='800'  style='text-align:center;border-collapse:collapse;'>
<tr>
	<td  style='font-family:Roboto; margin:0 auto;font-style: normal;  padding: 0.5%;'>
		&nbsp;
	</td>
</tr>
</table>





<table width='800' style='padding: 5%; font-family:Roboto;text-align:center;border-collapse:collapse;  '>

	
<tr>
	<td colspan='2' style='background-color: #00b4eb; font-size: 25px; color:#fff; padding: 2%'>
		Visita nuestra página web <br><br>
		<a href='https://www.corporacionchamluci.com' style='background-color: #fff; font-size: 18px; color:#00b4eb; padding: 5px; text-decoration: none;' >CLICK AQUÍ</a>
	</td>
</tr>
<tr>
	<td style='font-size: 12px; color:#656565; padding: 2%'>
		Copyright © 2019 Corporación Chamluci, Todos los derechos reservados. 

	</td>
</tr>
</table>


<!-- Final del memsaje  -->

</td>
    </tr>
</table> 


	</body>
</html>";


 echo $mensaje;

if(mail($to, $subject, $mensaje, $headers)){
    echo"mensaje enviado";
};


$correo=$datosFormulario[2];
echo json_encode($correo);
$clientes = $mysqli->query("SELECT * FROM correos WHERE correo='$correo'");

if (mysqli_num_rows($clientes)>0) {
    
}else{



$to2 = $datosFormulario[2];
$subject2 = "Bienvenido a Corporación Chamluci SAC";
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers2 .="From:Corporacion Chamluci SAC-Area de Contacto <ventas@corporacionChamluci.com>". "\r\n";



$mensaje2="	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr style='background-color:#afca52; text-align: center;' align='center'>
		<td>
			<table border='0' width='100%'>
				<tr>
					<td width='100%' align='center' style='font-weight: bold; color:#fff; font-size:200%;'>				

<h1 style='font-family: Roboto, Roboto, sans-serif; margin-block-end:0em;'>	
Bienvenido  	
</h1>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style='background-color: #fff; text-align: center; font-weight: bold; -webkit-background-clip: text; -webkit-text-fill-color: transparent; font: oblique bold 200% cursive; ' colspan='2'>
				<img src='https://corporacionchamluci.com/imagenes-Correos/logo.png' alt='' width='50%'>
		</td>
	</tr>
	<tr>
		<td style='background-color: #fff; color:#fff; font: oblique bold 100% cursive;'>
						s
		</td>
	</tr>
	<tr>
		<td  width='100%' style='background-color: #aeca52;'>
			<table border='0' width='80%' align='center'style='color: #fff;'>
				<tr>
					<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:200%; text-decoration: none;'>
						<a href='mailto:Ventas@corporacionchamluci.com' style='text-decoration: none; color:#fff'>Ventas@corporacionchamluci.com</a> 
						<br>
						947153316 / 984132072 / 934717709 / 947153188
					</td>		
				</tr>			
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<br>
		</td>
	</tr>
	<tr>
		<td  width='100%' >
			<table width='80%' align='center'style='color: #fff;'>
				<tr>
					<td  width='100%' align='center' style='color:#000; font-family: roboto; font-size:180%; padding: 2%; border: solid 3px #aeca52;' >
Le estamos enviando una invitación a nuestra página digital de Corporación Chamluci SAC, conócenos mejor y atrévete a explorar la gran variedad de productos que tenemos para ti de excelente calidad en accesorios para tus servicios higiénicos y accesorios de limpieza, aquí podrás encontrar la mejor forma segura y eficaz de realizar tus compras. ¡Gracias por contactarnos!
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<br>
		</td>
	</tr>
	<tr>
		<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:300%; background-color: #aeca52; '>
Línea institucional y artículos de limpieza 
		</td>
	</tr>
	<tr>
		<td style='background: linear-gradient(to bottom, #2195d0 0%, #2195d0 60%, #175a91 61%, #009bd3 84%,#175a91 100%);text-align:center;'>
		<br><br>
			<img src='https://corporacionchamluci.com/imagenes-Correos/EMAIL1.png' width='70%' alt=''>
		</td>
	</tr>
	<tr>
		<td width='100%' align='center' style='color:#fff; font-family: roboto; font-size:200%; background-color: #2195d0; padding: 2%; border: 5px,#2195d0'>
			<a  href='https://www.corporacionchamluci.com' style='background-color: #fff; padding: 1%; text-decoration: none; color:#2195d0; text-align:center;font-size: 200%'> Entra aqui</a>	
		</td>
	</tr>
	<tr>
		<td style='background: linear-gradient(to bottom, #2195d0 0%, #2195d0 60%, #175a91 61%, #009bd3 84%,#175a91 100%);text-align:center;'>
			<br><br>
			<img src='https://corporacionchamluci.com/imagenes-Correos/EMAIL2.png' width='70%' alt=''>
		</td>
	</tr>
	<tr>
		<td>
			<table width='100%' align='center' style='background-color:#aeca52 '>
		<tr style='text-align: center'>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/1.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/2.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/3.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/4.png' width='70%' alt=''>
			</td>
			<td>
				<img src='https://corporacionchamluci.com/imagenes-Correos/5.png' width='70%' alt=''>
			</td>
		</tr>
	<tr style='text-align: center;color: #fff; font-size: 150%; font-weight: bold;'>
			<td>
				Garantia
			</td>
			<td>
				Exelentes <br>Precios
			</td>
			<td>
				Atención <br>Personalizada 
			</td>
			<td>
			 	Stock <br> Permanente
			</td>
			<td>
				Delivery <br> Gratuito
			</td>
	</tr>
</table>";








if(mail($to2, $subject2, $mensaje2, $headers2)){
    echo"mensaje enviado";
};


 $fecha=date('Y-m-d');
        $hora=date('H:i');

                $datosProducto = $mysqli->query("INSERT INTO correos (id, nombre, correo, hora, fecha)
VALUES (null, '2', '$correo','$hora','$fecha')");
};


mysqli::close;

        break;



}