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
		<div class="body-panel">
			<div class="col-1-2 width-40 responsive-none">
				<img src="assets/images/contacto-1.png" alt="">
			</div>
			<div class="col-1-2 form width-60">
				<div class="header-panel">
					<h1>
						Contáctanos
					</h1>
					<div class="separador1 margin-left-none margin-right-none width-100">
						<i class="fa fa-object-ungroup text-primary"></i> 
						<span class="separator-right bg-primary"></span>
					</div>
				</div>

				<div class="col-1-2 margit-top-10">

					<div class="combo-Input">
					<i class="fa fa-building"></i><input type="text" name="" placeholder="Ruc" id="">
					</div>

					<div class="combo-Input">
					<i class="fa fa-envelope"></i><input type="text" name="" placeholder="Nombre" id="">
					</div>
				
				</div>
				<div class="col-1-2">
					<div class="combo-Input">
					<i class="fa fa-user"></i><input type="text" name="" placeholder="Asunto" id="">
					</div>

					<div class="combo-Input">
					<i class="fa fa-phone"></i><input type="text" name="" placeholder="Telefóno" id="">
					</div>

				</div>
				<div class="col background-none">
					<div class="combo-Input">
					<i class="fa fa-phone"></i><textarea name="" id=""  rows="4" placeholder="Mensaje"></textarea>
					</div>
				</div>

			</div>

		</div>







	</div>
</div>
</div>


<div class="separador-full-2 text-center text-white resize">
	<div class="body-panel">
			<h2 class=" text-white text-center">Múltiples Formas de pago</h2>

	<div class="container">
		<div class="col-1-2 background-none border">
		<img class="lazy"
                                    src="assets/images/loading.webp"
                                    data-src="<?php echo $urlImg.$contacto['img_bcp']; ?>"
                                    data-srcset="<?php echo $urlImg.$contacto['img_bcp']; ?>"
									alt="Imagen logo bbva">
									
									<div ><?php echo $contacto['t_bcp1']; ?></div>

                                <div><?php echo $contacto['t_bcp2']; ?></div>

                                <span><?php echo $contacto['t_bcp3']; ?></span> 
		</div>



		<div class="col-1-2 background-none border">
			<img class="lazy"
                                    src="assets/images/loading.webp"
                                    data-src="<?php echo $urlImg.$contacto['img_bbva']; ?>"
                                    data-srcset="<?php echo $urlImg.$contacto['img_bbva']; ?>"
									alt="Imagen logo bbva">
									
									<div ><?php echo $contacto['t_bbva_1']; ?></div>

                                <div><?php echo $contacto['t_bbva_2']; ?></div>

                                <span><?php echo $contacto['t_bbva_3']; ?></span> 
			</div>
	</div>
	</div>

</div>






<div class="container">
	<div class="row">
		<div class="body-panel">
			<div class="col-1-4 shadowNone">

			<div class="wt-icon-box-wraper">
				<div class="wt-icon-box-sm">
					<span class="icon-cell">
						<i class="fa fa-phone"></i>
					</span>
				</div>
				<br>
				<div class="icon-content">
					<h5>	CENTRAL</h5>
				<?php echo $contacto['tel1']; ?>
			</div>

			</div>


			<div class="wt-icon-box-wraper">
				<div class="wt-icon-box-sm">
					<span class="icon-cell">
						<i class="fa fa-whatsapp"></i>
					</span>
				</div>
				<br>
				<div class="icon-content">
					<h5> WHATSAPP</h5>
					<?php echo $contacto['tel2']; ?>
				</div>

			</div>

			<div class="wt-icon-box-wraper">
				<div class="wt-icon-box-sm">
					<span class="icon-cell">
						<i class="fa fa-envelope-o"></i>
					</span>
				</div>
				<br>
				<div class="icon-content">
					<h5>EMAIL</h5>
					<a href="mailto:<?php echo $contacto['correo']; ?>"> <?php echo $contacto['correo']; ?></a>
				</div>

			</div>
			<div class="wt-icon-box-wraper">
				<div class="wt-icon-box-sm">
					<span class="icon-cell">
						<i class="fa fa-clock-o"></i>
					</span>
				</div>
				<br>
				<div class="icon-content">
					<h5>HORARIOS</h5>
					<?php echo $contacto['horario']; ?>
				</div>

			</div>

			</div>



			
			<div class="col-1-3 ">
			<div class="wt-icon-box-wraper">
				<div class="wt-icon-box-sm">
					<span class="icon-cell">
						<i class="fa fa-phone"></i>
					</span>
				</div>
				<br>
				<div class="icon-content">
					<h5>DIRECCIÓN</h5>
					<p ><?php echo $contacto['direccion']; ?></p>
					<iframe async src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.951333937369!2d-76.96395768860738!3d-12.046869491467234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c687e8f34931%3A0xfc6d9c8f72b65227!2sCORPORACION+CHAMLUCI+SAC!5e0!3m2!1ses!2spe!4v1487283263242" width="100%" height="670" frameborder="0" style="border:0" title="Goggle Maps" allowfullscreen></iframe>

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