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
$idCategoria= $idRelativo[0];
//clases requeridas
$Category= new Category();
$Products= new Products();

//funciones Utilizadas

$categoryList = $Category->categoryList();
$datosCategoria = $Category->datosCategoria($idCategoria);
$featuredProducts = $Products->featuredProducts();
$ProductCategory = $Products->productosCategoria($idCategoria);

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



<div class="container">




<div class="row">
    <div class="Categorias col-1-4">
		<div class="container">
			<div class="row">
				<div class="body-panel">
					<div class="col-1-4">
						<div class="header-categoria">
								<h3>
									Categoriás
								</h3>
						</div>
						<div class="body-category">
							<ul>
							<?php 
            $contadorCategorias= count($categoryList) ;
            for ($i=0; $i <$contadorCategorias ; $i++) { 
                 $url= $categoryList[$i]['id']."-".$categoryList[$i]['url'];
            ?>
				                        <li>
				                            <h4 > 
											<i class="fa fa-minus" aria-hidden="true"></i>
<a href="Categoria/<?php echo $url;?>" title="<?php echo mb_strtoupper($categoryList[$i]['titulo']);?>" > 
                                                    <?php echo mb_strtoupper($categoryList[$i]['titulo']);?>
                                                </a>
                                            </h4>
				                        </li>
        <?php } ?>


							</ul>

						</div>
					</div>

				</div>

			</div>

		</div>




    </div>
	
	
	
	
	
	<div class="col-1-3">
        



<div class="container Productos">
	<div class="row">
		




		<div class="body-panel">
<div class="header-panel">
			<div class="cabecera-1">
				<i class="fa fa-sort-alpha-asc trasparence" aria-hidden="true"></i>
				<i class="fa fa-random" aria-hidden="true"></i>
			</div>
			<div class="cabezera-2">
				<p>Modo de visualización</p>
				<i class="fa fa-th-list" aria-hidden="true"></i>
				<i class="fa fa-th trasparence" aria-hidden="true"></i>
			</div>

		</div>
				
<?php 

$cantidadRespuesta = count($ProductCategory);
if($cantidadRespuesta < 8 ){
	$contadorproducto = $cantidadRespuesta;
}else{
	$contadorproducto= $cantidadRespuesta;
}

    
	for ($i=0; $i < $contadorproducto ; $i++) { 
?>
			<div class="col-1-4">
			<a href="<?php echo 'Producto/'.$ProductCategory[$i]['id'].'-'.$ProductCategory[$i]['url']; ?>" title="Imagen"> 
                        <img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$ProductCategory[$i]['img1']; ?>" 
                        data-srcset="<?php echo $urlImg.$ProductCategory[$i]['img1']; ?>"  
                        title="<?php echo $ProductCategory[$i]['titulo']; ?>" 
                        alt="<?php echo $ProductCategory[$i]['titulo']; ?>">
                    </a>
				<h2 class="text-primary-two">
				<a href="<?php echo 'Producto/'.$ProductCategory[$i]['id'].'-'.$ProductCategory[$i]['url']; ?>" title="<?php echo $ProductCategory[$i]['titulo']; ?>" ><?php echo $ProductCategory[$i]['titulo']; ?></a>


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