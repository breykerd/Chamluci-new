<?php

if($urls[2]=='Nosotros'){
?>


<div class="slider-little">
<img id="cabezera" class="img-header" src="assets/images/empresa.jpg"  alt="">
    <h1 class="texto-header text-white size-h1">
        Nosotros Somos
    </h1>
</div>


<?php
}else if($urls[2]=='Categoria'){
?>


<div class="slider-little">
<img id="cabezera" class="img-header" src="<?php echo $urlImg.$datosCategoria['img_header']; ?>"  alt="">
    <h1 class="texto-header text-white size-h1">
        <?php echo ucwords(mb_strtolower($datosCategoria['titulo'])); ?>
    </h1>
</div>    



<?php
}else if($urls[2]=='Producto'){
?>


<div class="slider-little">
<img id="cabezera" class="img-header" src="<?php echo $urlImg.$datosCategoria['img_header']; ?>"  alt="">
    <h2 class="texto-header text-white size-h1">
        <?php echo ucwords(mb_strtolower($datosCategoria['titulo'])); ?>
    </h2>
</div>




<?php
}else if($urls[2]=='Blog'){
    ?>
    
    
    <div class="slider-little">
    <img id="cabezera" class="img-header" src="assets/images/blog.jpg"  alt="">
        <h1 class="texto-header text-white size-h1">
            Blog
        </h1>
    </div>    
    
    
    
    <?php
    }else if($urls[2]=='Contacto'){
        ?>
        
        
        <div class="slider-little">
        <img id="cabezera" class="img-header" src="assets/images/banner-contacto.jpg"  alt="">
            <h1 class="texto-header text-white size-h1">
                Contacto
            </h1>
        </div>    
        
        
        
        <?php
        }
?>







