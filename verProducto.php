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
$idProducto = $idRelativo[0];
//clases requeridas
$Category = new Category();
$Products = new Products();
$laEmpresa =new laEmpresa();


//funciones Utilizadas

$categoryList = $Category->categoryList();
$DatosProducto= $Products->datosProducto($idProducto);
$idCategoria= $DatosProducto['id_cate'];
$datosCategoria = $Category->datosCategoria($idCategoria);
$productosPie= $Products->productosPie();
$contacto= $laEmpresa->contacto();



$presentacion = $DatosProducto['presentacion'];

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

require 'includes/slider-little.php';



switch ($presentacion) {
    case '2':
        require('includes/desing2.php');
        break;

    case '3':
        require('includes/desing3.php');
        break;

    case '4':
        require('includes/desing4.php');
        break;
    
    default:
        require('includes/desing1.php');
        break;

}



?>





<?php

require 'includes/footer.php'

?>

<script src="assets/js/functions.js?value=<?php echo rand(5,12);?>"> </script>
</body>
</html>