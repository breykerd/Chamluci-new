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
					<img src="assets/images/blog-img.png" alt="">
					
					
				


				<div class="header-panel">
					<h1 class="margin-left-10">
						Articulos
					</h1>
					<div class="separador1 margin-left-none margin-right-none width-100">
						<i class="fa fa-object-ungroup text-primary"></i> 
						<span class="separator-right bg-primary"></span>
					</div>
				</div>

<div class="margin-Top-Button paddin">
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.


</div>

<blockquote>
	<p>
	The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.	
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