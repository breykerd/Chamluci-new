<?php 
//Archivos requeridos
require('backend/backend.php');


//optenemos el id de la categoria o producto segun sea el caso de la url donde nos encontremos
//optengo url relativa
$urlRelativo=$_SERVER['REQUEST_URI'];

//realizo explode a la url para optener el string donde se encuentra agregada el numero de categoria
$urls=explode('/', $urlRelativo);

//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria

$Category = new Category();
$Products = new Products();
$Blog =new Blog();
$laEmpresa =new laEmpresa();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$productosPie= $Products->productosPie();
$contacto= $laEmpresa->contacto();
$blog= $Blog->blog();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Corporación Chamluci - Líderes en línea institucional</title>
	<!--<script src="assets/js/apiProcess.js" ></script>-->
	<?php 

require 'includes/style.php';

?>
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
		<div class="body-panel">
			
			<div class="col-1-2 form width-70 width-100-responsive">
				<div class="col shadow">
					<img src="assets/images/blog-img.png" alt="">
					<div class="contenido">
					<h3>titulo del articulo destacado</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
					<button class="buttom">
					Ver mas
					<i class="fa fa-angle-double-right"></i>
					</button>

					</div>
					
				

				</div>

				<div class="header-panel">
					<h1>
						Articulos
					</h1>
					<div class="separador1 margin-left-none margin-right-none width-100">
						<i class="fa fa-object-ungroup text-primary"></i> 
						<span class="separator-right bg-primary"></span>
					</div>
				</div>
				<div class="articulos" id="articulos">


				
</div>
			</div>
			
			<div class="col-1-2 width-30">
			<h4>
					Redes Sociales
				</h4>
				<div class="separador1 margin-left-none">
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
					<iframe title="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCorporacion-Chamluci-SAC-657265237665077%2F&tabs=timeline&width=350&height=550&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="290" height="500"  scrolling="no" frameborder="0" allowTransparency="true" async></iframe>
                                   
					</div>			</div>

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