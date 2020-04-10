
<div class="row shadow margin-Top-Button">
<div class="container ">
	<div class="row ">

	


	
		<div class="header-panel text-center">
			<h1 ><?php echo ucwords(mb_strtolower($DatosProducto['titulo'])); ?></h1>
			<div class="separador">
				<span class="separator-left text-primary"></span>
				<i class="fa fa-object-group fa-2x"></i>
				<span class="separator-right text-primary"></span>
			</div>
		</div>
	


		<div class="body-panel margin-top-none">
		<div class="row horizontal">

			<div class="col-1-2 ">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img1']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img1']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>

			<div class="col-1-2 shadow border padding-p">
				
					<?php echo $DatosProducto['descripcion']; ?>
				
				
			</div>


			
</div>
		</div>



		<div class="header-panel text-center">
			<div class="separador">
				<span class="separator-left text-primary"></span>
				<span class="separator-right text-primary"></span>
			</div>
		</div>
		<div class="body-panel ">
			<div class="row horizontal">

			
			<div class="col-1-4">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img2']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img2']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>
			<div class="col-1-2 shadow border ">
				
					<?php echo $DatosProducto['detalle']; ?>
				
				
			</div>
			<div class="col-1-4">

			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img3']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img3']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">


			</div>

		</div>

		<div class="body-panel">
			<div class="row text-center">
				<a class="buttom">
				Cotizar
</a>

			</div>

		</div>
		<div class="body-panel">
			<div class="row text-center">
				<h3>Informacion Adicional</h3>

			</div>

		</div>
</div>



	</div>
	</div>
</div>
