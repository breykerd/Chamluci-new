<?php 
require("../backend/connection.php");
$mysqli= new Conexion();
//incluir el archivo de paginación
include 'paginacionB.php'; 

//las variables de paginación
if (isset($_GET['page'])) {
	$page =$_GET['page'];
}else{
	$page = 1;
}

$per_page = 4; //la cantidad de registros que desea mostrar

$adjacents  = 4; //brecha entre páginas después de varios adyacentes

$offset = ($page - 1) * $per_page;

//Cuenta el número total de filas de la tabla*/

$resultado=$mysqli->query("SELECT * FROM blog " );

$countQuery =$resultado->num_rows;

		$total_pages = ceil($countQuery/$per_page);

		$reload = 'articulos.php';

		//consulta principal para recuperar los datos

		$blogs = $mysqli->query("SELECT * FROM blog ORDER BY id DESC LIMIT $offset,$per_page");

		if ($total_pages>0){

			?>




<?php
$cant=0;
while($blog = mysqli_fetch_array($blogs)){
    $caracteres= 210;
$textoRecortado=substr($blog['detalle'], 0, $caracteres).'...';
?> 
       <!-- COLUMNS 1 -->
                <div class="col-1-2  background-white-two margin-top">
                    <a href="Blog/<?php echo $blog['id'].'-'.$blog['url']; ?>">
                        <img src="<?php echo $urlImg.$blog['img']; ?>" alt="<?php echo $blog['titulo']; ?>">
                    </a>

					<h3>
                    <a href="Blog/<?php echo $blog['id'].'-'.$blog['url']; ?>"> <?php echo $blog['titulo']; ?></a>
					</h3>
					<div>
										<?php echo $textoRecortado; ?>

					</div>

					<a class="buttom" href="Articulo/<?php echo $blog['id'].'-'.$blog['url']; ?>">
					Leer Más
					<i class="fa fa-angle-double-right"></i>
					</a>
				</div>

<?php
}
?>

<div class="col text-center background-none">

	<div class="centrado">
     	<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
        
    </div>
</div>

<?php
} else {
?>
<div class="alert alert-warning alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>Aviso!!!</h4> No hay datos para mostrar 
</div>
<?php
}
?>





