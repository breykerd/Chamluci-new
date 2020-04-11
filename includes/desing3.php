
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

        <div class="body-panel margin-top-none">
		<div class="row horizontal">

			<div class="col-1-2 shadow border padding-p">
					<?php echo $DatosProducto['detalle']; ?>
            </div>
            <div class="col-1-2 ">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img2']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img2']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>

			


			</div>
		</div>

		


		<div class="body-panel">
			<div class="row text-center">
			<button class="buttom margin-top-none"  id="cotizar<?php echo $DatosProducto['id'];?>" onClick="compararArrays(<?php echo $DatosProducto['id']; ?>)">
				<input type="hidden" name="valores"  value="<?php echo $DatosProducto['id'];?>">
					cotizar
				</button>
				<button class="buttom cotizado" id="agregado<?php echo $DatosProducto['id'];?>">
					Agregado
				</button>

			</div>

		</div>
		<div class="body-panel">
			<div class="row text-center">
                <?php require 'informacionAdicional.php'; ?>
			</div>

		</div>
</div>



	</div>
	</div>
</div>
