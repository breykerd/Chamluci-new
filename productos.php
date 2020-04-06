<?php 
//Archivos requeridos
require('backend/backend.php');


//optenemos el id de la categoria o producto segun sea el caso de la url donde nos encontremos
//optengo url relativa
$urlRelativo=$_SERVER['REQUEST_URI'];

//realizo explode a la url para optener el string donde se encuentra agregada el numero de categoria
$url=explode('/', $urlRelativo);

//luego a ese string le realizo otro explode pero esta ves con un delimitador diferente para optener  la id de la categoria
 $idRelativo=explode('-', $url[3]);
// luego ese elemento donde se encuentra el id de la categoria lo guardo en una variable para poder manejarlo mejor
$idCategoria= $idRelativo[0];
//clases requeridas
$Category= new Category();
$Products= new Products();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$featuredProducts = $Products->featuredProducts();
$ProductCategory = $Products->productosDestacadosCategoria($idCategoria);
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

?>




<div class="container">




<div class="row">
    <div class="col-1-4">
esto es categorias
    </div>
    <div class="col-1-3">
        



<div class="container Productos">
	<div class="row">
		
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
				<button class="buttom">
					cotizar
				</button>
			</div>

<?php }; ?>

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