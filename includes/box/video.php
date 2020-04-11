<?php 
if ($contDiv==3 or $contDiv==1) {
	if ($contador2==2) {
		
	}else{
			$centrado="<div class='col-1-4'></div>";

	}
}elseif ($contDiv==4) {
    $centrado="<div class='col-1-4'></div>";
}else{
	$centrado="";
}
    $video=$DatosProducto['video'];
    echo $centrado;

 ?>

<div class="col-1-2-img shadow text-center border">
    <h3 class="">
       <?php echo $DatosProducto['texto Video']; ?>
    </h3>   
    <p class="text-center">
    	<button onclick="window.open('<?php echo $video; ?>','_blank');" aria-label="Youtube" class="buttom text-primary">
                <i class=" fa fa-youtube-play fa-lg fa-3x"></i>
            </button> 
    </p>     
</div>