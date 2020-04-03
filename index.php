<?php 
//Archivos requeridos
require('backend/connection.php');
require('backend/backend.php');

//clases requeridas
$Category= new Category();
$Products= new Products();

//funciones Utilizadas

$categoryList=$Category->categoryList();
$featuredProducts=$Products->featuredProducts();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Corporación Chamluci - Líderes en línea institucional</title>
	<script src="assets/js/apiProcess.js" ></script>
	<link rel="icon" href="assets/images/favicon.ico" type="image/ico">
	<link rel="stylesheet/less" type="text/css" href="assets/css/style.less?value=<?php echo rand(5,12);?>" />
	<link rel="stylesheet/less" type="text/css" href="assets/css/responsive.less?value=<?php echo rand(5,12);?>?value=" />
	<link rel="stylesheet/less" type="text/css" href="assets/fonts/fontawesome/css/font-awesome.min.css" />
	<script src="assets/js/less.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body id="body" onresize="responsive();">
<!-- start custom menu-->	
<header class="site-header">





	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="wt-topbar-center">
					<ul id="correoHeader">
						<li>
							 <a href="mailto:Ventas@corporacionchamluci.com">Ventas@corporacionchamluci.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-2" id="header-2">
	<i class="fa fa-shopping-cart fa-5"> </i>
<a href="">
<img src="assets/images/logo.png" width=50%%; alt="">
</a>
<a href="#" id="menu_on" onClick="clases();return false;">
			<span></span>
			<span></span>
			<span></span>
</a>

	</div>
		
	



<nav>
<a href="">
<img src="assets/images/logo.png" style="margin-top:-4%; margin-left:3%;" alt="">
</a>	
	<ul>
		<li><a href="#">Inicio</a></li>
		<li><a href="#">La Empresa</a></li>
		

		<li class="subMenu" >
			<a href="#" onclick="mostrarOcultarSubMenu(); return false;">Productos</a>
			<ul class="children" id="children">
			<?php 
    $contadorCategorias= count($categoryList) ;
    for ($i=0; $i <$contadorCategorias ; $i++) { 
        $url= $categoryList[$i]['id']."-".$categoryList[$i]['url'];
?>
				<li>
				<a href="Categoria/<?php echo $url;?>" class="text-primary"> <?php echo mb_strtoupper($categoryList[$i]['titulo']);?></a>
				</li>


                                        
                                    <?php } ?>	


			</ul>

		</li>
		
		
		<li><a href="#">Blog</a></li>
		<li><a href="#">Contacto</a></li>
		<li></li>
	</ul>
</nav>
	<!-- -------------------- -->
<div id="header" class="header">


<div class="container">
	<div class="row">

	<div class="Superior">
		<div class="logo-Header"> <img src="assets/images/logo.png" alt=""></div>
		<div class="busqueda"><input type="text" placeholder="Busqueda"> <i class="fa fa-search"></i> </div>
<div class="division">
&nbsp;
</div>
		<div class="central"><i class="fa fa-phone"></i>
		<a href="tel:012222312" >Central: (01)-222 2312 </a>
</div>
		<div class="redes-sociales">
			<i class="fa fa-facebook-square iconSocial"></i>
			<i class="fa fa-twitter iconSocial"></i>
			<i class="fa fa-youtube iconSocial"></i>
			<i class="fa fa-instagram iconSocial"></i>
		</div>

	</div>
</div>
<div class="row">
	<div class="inferior menu"> 
		<ul class="menu-inferior">
			<li class="secciones"><a href="">Inicio</a></li>
			<li class="secciones"><a href="">La Empresa</a></li>
			<li class="productos"  ><a href="" >Productos</a> 
			<div class="sub-menu" id="sub-menu" >
				
			
			<ul>


<?php 
    $contadorCategorias= count($categoryList) ;
    for ($i=0; $i <$contadorCategorias ; $i++) { 
        $url= $categoryList[$i]['id']."-".$categoryList[$i]['url'];
?>
				<li>
				<h2 > <a href="Categoria/<?php echo $url;?>" class="text-primary"> <?php echo mb_strtoupper($categoryList[$i]['titulo']);?></a></h2>
				</li>


                                        
                                    <?php } ?>






</ul>


</div>
		</li>
			<li class="secciones"><a href="">Blogs</a></li>
			<li class="secciones"><a href="">Contactos</a></li>
		</ul>	
		<div class="carrito">
			<div class="cantidad">
				<a href="Cotizacion" class="fa fa-shopping-cart"></a>
				<div class="circulo" style=>0</div>
				
			</div>
		</div>

	</div>
	
</div>



</div>
<!-- menu flotante -->






			
		
<!-- fin menu flotante -->
</header>
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
			<h2>Ofertas del Mes</h2>
			<div class="separador">
				<span class="separator-left"></span>
				<i class="fa fa-object-group fa-2x"></i>
				<span class="separator-right"></span>
			</div>
		</div>
		<div class="body-panel">
			<div class="columna-1">

			</div>
			<div class="columna-2">
				<div class="fila-1">

				</div>
				<div class="fila-2">

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
				<img src="assets/images/imagen-4.png" alt="">
				<button class="buttom">
					cotizar

				</button>
			</div>

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


<footer>
	<div class="container">
		<div class="row body-panel">
			<div class="col-footer-1">
				<h4>
					Redes Sociales
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>
					
				</div>
					<div class="redes-sociales">
						<i class="fa fa-facebook-square iconSocial"></i>
						<i class="fa fa-twitter iconSocial"></i>
						<i class="fa fa-youtube iconSocial"></i>
						<i class="fa fa-instagram iconSocial"></i>
					</div>
					<div class="logo-footer"> <img src="assets/images/logo.png" alt=""></div>

			</div>
			<div class="col-footer-2">
				<h4>
					Productos Destacados
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>
				</div>

				<?php 
for ($i= 1; $i<=2; $i++)
{
?>				
				 
				<div class="container">


				<div class="sub-col-1">
					<img src="assets/images/imagen-4.png" alt="">
				</div>
				<div class="sub-col-2">
					<h4>Nombre del producto extremadamente largo <?php echo $i; ?></h4>
					<a href="#" class="text-primary"> Ver Más</a>
				</div>
				</div>
				<?php }; ?>


			</div>


			<div class="col-footer-3">
				<h4>
					Información
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>	
				</div>

				<?php 
$contenido= array("Av. Santa Rosa # 424 - Santa Anita - Lima - Perú","01 - 478 0646","ventas@corporacionchamluci.com","947153316 / 934717709");	
$icons= array("fa-map-marker","fa-phone","fa-envelope-o","fa-whatsapp");

for ($i= 0; $i<=3; $i++)
{
?>	
				<div class="container">
					<div class="sub-col-1">
							<i class="fa <?php echo $icons[$i]; ?>"> </i>
					</div>
					<div class=sub-col-2>
					<a href=""><?php echo $contenido[$i]; ?></a>
					</div>

				</div>
				<?php }; ?>


			</div>


		</div>

	</div>
	<div class="copyright text-center">
		<h4>© 2019 Corporación Chamluci S.A.C. Todos Los Derechos Reservados. Realizado Por Tecnoblack.</h4>
	</div>
</footer>

<script src="assets/js/functions.js?value=<?php echo rand(5,12);?>"> </script>
</body>
</html>