<?php 
if ($contDiv==1) {
	$centrado="<div class='col-1-4'></div>";

}else{
	$centrado="";
}

echo $centrado;
 ?>


    	<div class="col-1-2-img shadow border ">
    		<h3 class="text-center">
                Certificados / Garantia
        	</h3>  
  
                <p class="text-center">
<!-- Certificados -->
<?php if ($DatosProducto['idCertificados']!=null) {
$idCertificados = explode(',' , $DatosProducto['idCertificados']);
$cantidadCertificados= count($idCertificados);
?>          

                
<?php 


for ($i=0; $i < $cantidadCertificados; $i++) { 
$Datoscertificado=$Products->certificados($idCertificados[$i]);
?>

<img src="<?php echo $urlImg.$Datoscertificado['imagen']; ?>" alt="<?php echo $Datoscertificado['nombre']; ?>" title="<?php echo $Datoscertificado['nombre']; ?>" style="height: 50px;margin-top:10px;">

<?php }; ?>
    
<?php }; ?>
               
<!-- Fin Certificados -->

<!-- Garantia -->
<?php if ($DatosProducto['idGarantias']!=null) {

$idGarantias = explode(',' , $DatosProducto['idGarantias']);
$cantidadGarantias= count($idGarantias);

for ($i=0; $i < $cantidadGarantias; $i++) { 
$Datosgarantia=$Products->garantias($idGarantias[$i]);
?>

<img src="<?php echo $urlImg.$Datosgarantia['imagen']; ?>" alt="<?php echo $Datosgarantia['nombre']; ?>" title="<?php echo $Datosgarantia['nombre']; ?>" style="width: 60px;height: 60px;">

<?php }; ?>

                
<?php }; ?>

            </p>

<!-- Fin Garantia -->
</div>