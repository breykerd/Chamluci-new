<?php 
//Archivos requeridos
require('backend/backend.php');

//clases requeridas
$Category= new Category();
$Products= new Products();
$laEmpresa =new laEmpresa();
$Ofertas = new Ofertas();


//funciones Utilizadas

$categoryList=$Category->categoryList();
$featuredProducts=$Products->featuredProducts();
$productosPie= $Products->productosPie();
$contacto= $laEmpresa->contacto();
$ofertasDelMes = $Ofertas->ofertasDelMes();
//echo count($ofertasDelMes);
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

?>


<!-- end custom menu --> 
<!-- start slider --> 
<div class="slider">

</div>
<!-- end slider -->
<!-- start newsletter -->  
<div class="newsletter">
	<div class="container">
		<div class="row">

<div class="mensajeNewsletter">
	<div class="Contenido">
		
	<div class="icono">
		<i class="fa fa-clipboard"></i>
	</div>
	<div class="texto">
	<h4>
	RECIBE NUESTRAS OFERTAS
	</h4>
	<p>
	Esta al tanto de nuestros nuevos productos
	</p>
	</div>
	</div>
</div>
<div class="suscripcion">
<input type="text" class="inputIcon"><i class="fa fa-paper-plane-o iconInput"></i>
</div>
		</div>

	</div>

</div>
<!-- end newsletter--> 


<div class="container">
	<div class="row">
		<div class="header-panel text-center">
			<h2>Ofertas del Mes </h2>
			<div class="separador">
				<span class="separator-left"></span>
				<i class="fa fa-object-group fa-2x"></i>
				<span class="separator-right"></span>
			</div>
		</div>
		<div class="body-panel">
			<div class="columna-1">
<?php



for($i = 0; $i < count($ofertasDelMes); $i++ ){
	if($ofertasDelMes[$i]['posicionOferta']==1){

	
?>
<img src="adminchamluci/img/<?php echo $ofertasDelMes[$i]['imgOferta'] ?> " alt="">
<?php
}
}
?>
			</div>
			<div class="columna-2">
				<div class="fila-1">
				<?php 
for($i = 0; $i < count($ofertasDelMes); $i++ ){
	if($ofertasDelMes[$i]['posicionOferta'] == 2){

	
?>
<img src="adminchamluci/img/<?php echo $ofertasDelMes[$i]['imgOferta'] ?> " alt="<?php echo $ofertasDelMes[$i]['nombreOferta'] ?>">
<?php
}
}

?>
				</div>
				<div class="fila-2">
				<?php 
for($i = 0; $i < count($ofertasDelMes); $i++ ){
	if($ofertasDelMes[$i]['posicionOferta'] == 3){

	
?>
<img src="adminchamluci/img/<?php echo $ofertasDelMes[$i]['imgOferta'] ?> " alt="">
<?php
}
}

?>
				</div>

			</div>
			
		</div>
	</div>
</div>

<div class="separador-full text-center">
<h2>Encuentra lo que buscas en un solo lugar</h2>
</div>

<div class="container">
	<div class="row">
		<div class="header-panel text-center">
			<h2>Productos Destacados</h2>
			<div class="separador">
				<span class="separator-left"></span>
				<i class="fa fa-pied-piper-pp fa-2x"></i>
				<span class="separator-right"></span>
			</div>
		</div>
		<div class="body-panel">

<?php 
    $contadorproducto= 8 ;
    for ($i=0; $i <$contadorproducto ; $i++) { 
?>
			<div class="col-1-4">
			<a href="<?php echo 'Producto/'.$featuredProducts[$i]['id'].'-'.$featuredProducts[$i]['url']; ?>" title="Imagen"> 
                        <img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$featuredProducts[$i]['img1']; ?>" 
                        data-srcset="<?php echo $urlImg.$featuredProducts[$i]['img1']; ?>"  
                        title="<?php echo $featuredProducts[$i]['titulo']; ?>" 
                        alt="<?php echo $featuredProducts[$i]['titulo']; ?>">
                    </a>
				<h2 class="text-primary-two">
				<a href="<?php echo 'Producto/'.$featuredProducts[$i]['id'].'-'.$featuredProducts[$i]['url']; ?>" title="<?php echo $featuredProducts[$i]['titulo']; ?>" ><?php echo $featuredProducts[$i]['titulo']; ?></a>


				</h2>
				<button class="buttom margin-top-none"  id="cotizar<?php echo $featuredProducts[$i]['id'];?>" onClick="compararArrays(<?php echo $featuredProducts[$i]['id']; ?>)">
				<input type="hidden" name="valores"  value="<?php echo $featuredProducts[$i]['id'];?>">
					cotizar
				</button>
				<button class="buttom cotizado" id="agregado<?php echo $featuredProducts[$i]['id'];?>">
					Agregado
				</button>			</div>

<?php }; ?>

		</div>

	</div>
</div>

<div class="separador-full-2">

</div>

<div class="container">
	<div class="row">
		<div class="body-panel">
		
			<div class="col-1-2">
			<img src="assets/images/Nosotros.png" alt="">
			</div>
			<div class="col-1-2">
				<div class="separador1">
					<i class="fa fa-object-ungroup"></i> <span class="separator-right"></span>
				
				 	
				</div>
			<h2>
				Sobre Nosotros
			</h2>
			<p>
			Somos una Empresa Importadora y Comercializadora de productos de línea institucional e implementos de limpieza que desea colocarse a su disposición y ser una alternativa de solución a sus requerimientos, encargándonos de sus necesidades de forma integral.
			</p>
			<div class="separador1">
				
				 	<span class="separator-left"></span><i class="fa fa-object-ungroup"></i>
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