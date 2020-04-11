<?php 
if ($contDiv==1) {
    $centrado="<div class='col-1-4'></div>";

}else{
	$centrado="";
}
echo $centrado;

 ?>

<div class="col-1-2-img shadow text-center">
    <h3 class="text-center">
        Colores Disponibles
    </h3>  
	<img src="<?php echo $urlImg.$DatosProducto['img4']; ?>" alt="<?php echo $DatosProducto['titulo']; ?>" width="100px">      
</div>