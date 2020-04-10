<?php 
//Archivos requeridos
require('backend/backend.php');


//optenemos el id de la categoria o producto segun sea el caso de la url donde nos encontremos
//optengo url relativa
$urlRelativo=$_SERVER['REQUEST_URI'];

//realizo explode a la url para optener el string donde se encuentra agregada el numero de categoria
$urls=explode('/', $urlRelativo);


//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria
// luego ese elemento donde se encuentra el id de la categoria lo guardo en una variable para poder manejarlo mejor
//clases requeridas

$Category= new Category();
$Products= new Products();

$laEmpresa =new laEmpresa();
//funciones Utilizadas

$categoryList = $Category->categoryList();
$featuredProducts = $Products->featuredProducts();

$laempresa=$laEmpresa->Empresa();

$detalles=$laempresa['detalle'];
//procesamiento de descripcion de la empresa
// se divide el contenido de la variable a partir de el simbolo |
$subDescripciones = explode ("|", $detalles, 2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

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
<div class="container">
    <div class="row">
        
        <div class="body-panel">
			<div class="col-1-2-modific">
				<div class="header-panel">
					<h1>Expertos en productos de línea institucional</h1>
					
					<?php echo $subDescripciones[0]; ?>
					
					<img src="assets/images/empresa.png"  alt="">

				</div>
			</div>
			<div class="col-1-3-modific col-offset-2">
				<h4>
					Redes Sociales
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>
				</div>
				<div>

				
					<ul>
						<li>
							<a href="">Facebook</a>
						</li>
					</ul>
					
				</div>
					<div class="contenido text-center">
					<iframe title="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCorporacion-Chamluci-SAC-657265237665077%2F&tabs=timeline&width=350&height=550&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="345" height="500"  scrolling="no" frameborder="0" allowTransparency="true" async></iframe>
                                   
					</div>
			</div>

		</div>
	</div>

	
	<div class="body-panel">

		
		<div class="separador1 text-primary margin-left-none margin-right-none width-100">
			<i class="fa fa-object-ungroup text-primary"></i>
			 <span class="separator-right background-primary margin-left-none "></span>	
		</div>
		<h2 class="mensaje-nosotros">
		Esta es la lista de nuestra amplia variedad de productos
		</h2>
		<div class="separador1 margin-left-none margin-right-none width-100">
			<span class="separator-left margin-right-none "></span><i class="fa fa-object-ungroup"></i>
		</div>
	</div>



	<div class="body-panel margin-buttom-5 paddin-li margin-top-none">
                                        <?php echo $subDescripciones[1]; ?>

	</div>

</div>

 
<?php

require 'includes/footer.php'

?>

<script src="assets/js/functions.js?value=<?php echo rand(5,12);?>"> </script>
</body>
</html>