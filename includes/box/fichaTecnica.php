<?php 
if ($contDiv==3 or $contDiv==1) {
	if ($contador2==2) {
		
	}else{
		$centrado="<div class='col-1-4'></div>";

	}
}elseif ($contDiv==2) {
	if ($valorArray==1 ) {
		$centrado="<div class='col-1-4'></div>";

	}elseif ($valorArray==2) {
		$centrado="<div class='col-1-4'></div>";
	}else{
		$centrado="<div class='col-1-4'></div>";
	}
}else{
	$centrado="";
}
$ficha=$urlImg.$DatosProducto['ficha_tecnica'];
echo $centrado;

 ?>


<div class="col-1-2-img shadow text-center">
    <h3 class="">
        Ficha Tecnica
    </h3>   
    <p class="text-center">
    	    	<button onclick="window.open('<?php echo $ficha; ?>');" aria-label="Ficha Tecnica" class="bg-transparent border-primary text-primary">
    	<i class="fa fa-download text-center fa-3x"></i>

            </button> 

    </p>     
</div>