<?php 
//Archivos requeridos
require('backend/backend.php');


//optenemos el id de la categoria o producto segun sea el caso de la url donde nos encontremos
//optengo url relativa
$urlRelativo=$_SERVER['REQUEST_URI'];

//realizo explode a la url para optener el string donde se encuentra agregada el numero de categoria
$urls=explode('/', $urlRelativo);

//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria
//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria
$idRelativo=explode('-', $urls[3]);
// luego ese elemento donde se encuentra el id de la categoria lo guardo en una variable para poder manejarlo mejor
$id= $idRelativo[0];

//llamado de las clases

$Category = new Category();
$Products = new Products();
$laEmpresa =new laEmpresa();
$Blog =new Blog();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$productosPie= $Products->productosPie();
$contacto= $laEmpresa->contacto();
$blog= $Blog->blog();
$blogIndividual= $Blog->blogIndividual($id);


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <base href="../" />

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
			<img class="lazy"
                                    src="assets/images/loading.webp"
                                    data-src="<?php echo $urlImg.$blogIndividual['img']; ?>"
                                    data-srcset="<?php echo $urlImg.$blogIndividual['img']; ?>"

                                    alt="<?php echo $blogIndividual['titulo']; ?>">
					
					
				


				<div class="header-panel">
					<h1 class="margin-left-10">
					<?php echo $blogIndividual['titulo']; ?>
					</h1>
					<div class="separador1 margin-left-none margin-right-none width-100">
						<i class="fa fa-object-ungroup text-primary"></i> 
						<span class="separator-right bg-primary"></span>
					</div>
				</div>

<div class="margin-Top-Button paddin articulos">
<?php echo $blogIndividual['detalle']; ?>


</div>

<blockquote>
	<p>
	<?php echo $blogIndividual['detalle2']; ?> 
	</p>

</blockquote>

				
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