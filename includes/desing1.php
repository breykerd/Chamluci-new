
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
	


		<div class="body-panel margin-top">
		<div class="row horizontal shadow">

			<div class="col-1-2 ">
			<img class="lazy" src="assets/images/loading.webp" 
                        data-src="<?php echo $urlImg.$DatosProducto['img1']; ?>" 
                        data-srcset="<?php echo $urlImg.$DatosProducto['img1']; ?>"  
                        title="<?php echo $DatosProducto['titulo']; ?>" 
                        alt="<?php echo $DatosProducto['titulo']; ?>">
			</div>

			<div class="col-1-2  border padding-p ">
                    <h2>Descripción</h2>
                    <?php 
                    
                    if($DatosProducto['descripcion'] != ""){
                    echo $DatosProducto['descripcion']; 
                    }else{
                        echo $DatosProducto['detalle'];
                    };
                    
                    ?>
			</div>


			</div>
		</div>

        <div class="body-panel width-80 col-offset-1">
		<div class="row horizontal shadow text-center">
        <?php 
         if($DatosProducto['descripcion'] != ""){
            
                    ?>

			<div class="col-1-2  border padding-p">
            <h2>Características</h2>

					<?php echo $DatosProducto['detalle']; ?>
            </div>

            <?php 
                   }; ?>
            <div class="col-1-2 width-100 text-center">
                <h2 class="text-center">información Adicional</h2>
                <?php require 'informacionAdicional.php'; ?>
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
