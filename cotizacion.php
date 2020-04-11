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
$laEmpresa =new laEmpresa();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$contacto= $laEmpresa->contacto();
$productosPie= $Products->productosPie();


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
		<div class="body-panel horizontal">
			
			<div class="col-1-3-modific form width-70">
				<div class="header-panel">
					<h1>
					Área de cotización 
					</h1>
					<div class="separador1 margin-left-none margin-right-none width-100">
						<i class="fa fa-object-ungroup text-primary"></i> 
						<span class="separator-right bg-primary"></span>
					</div>
						<div class="col background-none cotizacion">
							<h5>Si quieres adquirir cantidades grandes en los productos háznoslo sabes podrías obtener un descuento sorpresa</h5>
						</div>
<div id="productos">


						
</div>

<div class="separador1 margin-left-none margin-right-none width-100">
						<span class="separator-left margin-right-none "></span><i class="fa fa-object-ungroup"></i>
					</div>

				</div>

				<div class="col-1-2 margit-top-10">

					<div class="combo-Input width-90">
					<i class="fa fa-building"></i><input type="text" name="" placeholder="Ruc" id="ruc">
					</div>

					<div class="combo-Input width-90">
					<i class="fa fa-envelope"></i><input type="text" name="" placeholder="Nombre" id="nombre">
					</div>
				
				</div>
				<div class="col-1-2">
					<div class="combo-Input width-90">
					<i class="fa fa-user"></i><input type="text" name="" placeholder="Asunto" id="asunto">
					</div>

					<div class="combo-Input width-90">
					<i class="fa fa-phone"></i><input type="text" name="" placeholder="Telefóno" id="telefono">
					</div>

				</div>
				<div>
				<div class="combo-Input width-95">
					<i class="fa fa-phone"></i><textarea name="" id="mensaje" cols="" rows="4" placeholder="Mensaje"></textarea>
					</div>
				</div>

			</div>
			<div class="col-1-4 shadowNone">
			<img src="assets/images/dudas.png" alt="">

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