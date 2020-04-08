<?php 
//Archivos requeridos
require('backend/backend.php');


//optenemos el id de la categoria o producto segun sea el caso de la url donde nos encontremos
//optengo url relativa
$urlRelativo=$_SERVER['REQUEST_URI'];

//realizo explode a la url para optener el string donde se encuentra agregada el numero de categoria
$urls=explode('/', $urlRelativo);

//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria
 $idRelativo=explode('-', $urls[3]);
// luego ese elemento donde se encuentra el id de la categoria lo guardo en una variable para poder manejarlo mejor
$idProducto = $idRelativo[0];
//clases requeridas
$Category = new Category();
$Products = new Products();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$DatosProducto= $Products->datosProducto($idProducto);
$idCategoria= $DatosProducto['id_cate'];
$datosCategoria = $Category->datosCategoria($idCategoria);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <base href="../" />

	<title>Corporación Chamluci - Líderes en línea institucional</title>
	<!--<script src="assets/js/apiProcess.js" ></script>-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/ico">
	<link rel="stylesheet/less" type="text/css" href="assets/css/style.less?value=<?php echo rand(5,12);?>" />
	<link rel="stylesheet/less" type="text/css" href="assets/css/responsive.less?value=<?php echo rand(5,12);?>?value=" />
	<link rel="stylesheet/less" type="text/css" href="assets/fonts/fontawesome/css/font-awesome.min.css" />
	<script src="assets/js/less.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body id="body" onresize="responsive();">
<!-- start custom menu-->	



<?php 

require 'includes/header.php';

require 'includes/slider-little.php'
?>



<div class="row shadow margin-Top-Button">
<div class="container ">
	<div class="row ">

	


	
		<div class="header-panel text-center">
			<h1 ><?php echo ucwords(mb_strtolower($DatosProducto['titulo'])); ?></h1>
			<div class="separador">
				<span class="separator-left text-primary"></span>
				<i class="fa fa-object-group fa-2x"></i>
				<span class="separator-right text-primary"></span>
			</div>
		</div>
	


		<div class="body-panel margin-top-none">
		<div class="row horizontal">

			<div class="col-1-2 ">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img1']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img1']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>

			<div class="col-1-2 shadow border">
				<p class="margin-p">
					<?php echo $DatosProducto['descripcion']; ?>
				</p>
				
			</div>


			
</div>
		</div>



		<div class="header-panel text-center">
			<div class="separador">
				<span class="separator-left text-primary"></span>
				<span class="separator-right text-primary"></span>
			</div>
		</div>
		<div class="body-panel ">
			<div class="row horizontal">

			
			<div class="col-1-4">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img2']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img2']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>
			<div class="col-1-2 shadow border">
				
					<?php echo $DatosProducto['detalle']; ?>
				
				
			</div>
			<div class="col-1-4">

			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img3']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img3']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">


			</div>

		</div>

		<div class="body-panel">
			<div class="row text-center">
				<a class="buttom">
				Cotizar
</a>

			</div>

		</div>
		<div class="body-panel">
			<div class="row text-center">
				<h3>Informacion Adicional</h3>

			</div>

		</div>
</div>



	</div>
	</div>
</div>



<?php

require 'includes/footer.php'

?>

<script src="assets/js/functions.js?value=<?php echo rand(5,12);?>"> </script>
</body>
</html>