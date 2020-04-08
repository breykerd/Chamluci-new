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

//funciones Utilizadas

$categoryList = $Category->categoryList();

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
        <div class="header-panel">

        </div>
        <div class="body-panel">

        </div>
    </div>
</div>


<?php

require 'includes/footer.php'

?>

<script src="assets/js/functions.js?value=<?php echo rand(5,12);?>"> </script>
</body>
</html>