
<footer>
	<div class="container">
		<div class="row body-panel">
			<div class="col-footer-1">
				<h4>
					Redes Sociales
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>
					
				</div>
					<div class="redes-sociales">
						<i class="fa fa-facebook-square iconSocial"> </i>
						<i class="fa fa-twitter iconSocial"></i>
						<i class="fa fa-youtube iconSocial"></i>
						<i class="fa fa-instagram iconSocial"></i>
					</div>
					<div class="logo-footer"> <img src="assets/images/logo.png" alt=""></div>

			</div>
			<div class="col-footer-2">
				<h4>
					Productos Destacados
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>
				</div>

				<?php 
for ($i= 0; $i<2; $i++)
{
?>				
				 
				<div class="container">
				<div class="sub-col-1">
				<a href="Producto/<?php echo $productosPie[$i]['id'].'-'.$productosPie[$i]['url']; ?>">

<img 
class="lazy" src="assets/images/loading.webp" 
	 data-src="<?php echo $urlImg.$productosPie[$i]['img1']; ?>" 
	 data-srcset="<?php echo $urlImg.$productosPie[$i]['img1']; ?>" 
title="<?php echo $productosPie[$i]['titulo']; ?>" 
alt="<?php echo $productosPie[$i]['titulo']; ?>" 

 rel="noopener">
</a>
				</div>
				<div class="sub-col-2">
					<h4><a href="Producto/<?php echo $productosPie[$i]['id'].'-'.$productosPie[$i]['url']; ?>"><?php echo $productosPie[$i]['titulo']; ?>
</a></h6></h4>
					<a href="Producto/<?php echo $productosPie[$i]['id'].'-'.$productosPie[$i]['url']; ?>" class="text-primary"> Ver Más</a>
				</div>
				</div>
				<?php }; ?>


			</div>


			<div class="col-footer-3">
				<h4>
					Información
				</h4>
				<div class="separador1">
					<i class="fa fa-object-ungroup text-primary"></i> <span class="separator-right bg-primary"></span>	
				</div>

				<?php 
$numeros=explode('/',$contacto['tel2']);
$random=array_rand($numeros);
$comparador = $mysqli->query("SELECT comparador FROM emailRandom ");
$row = mysqli_fetch_assoc($comparador);
$compara=intval($row['comparador']);
if($compara==1){
	$telefonos=$numeros['0']." / ".$numeros['1']." / ".$numeros['2']." / ".$numeros['3']." / ".$numeros['4'];
	$consulta = $mysqli->query("UPDATE emailRandom SET comparador='0' WHERE id='1' ");

}else{
	$telefonos=$numeros['1']." / ".$numeros['0']." / ".$numeros['2']." / ".$numeros['3']." / ".$numeros['4'];
	$consulta = $mysqli->query("UPDATE emailRandom SET comparador='1' WHERE id='1' ");

}




$contenido= array($contacto['direccion'], $contacto['tel1'],$contacto['correo'], $telefonos);	
$icons= array("fa-map-marker","fa-phone","fa-envelope-o","fa-whatsapp");

for ($i= 0; $i<=3; $i++)
{
?>	
				<div class="container">
					<div class="sub-col-1">
							<i class="fa <?php echo $icons[$i]; ?>"> </i>
					</div>
					<div class=sub-col-2>
					<?php if($i == 1 || $i == 2 ){
						if($i== 1){
							$href="tel:";
						}else{
							$href="mailto:";

						}



					
					
					?>

					<a href="<?php echo $href.$contenido[$i]; ?>">
						<?php echo $contenido[$i]; ?>
					
					</a>

					<?php }else{ echo $contenido[$i]; }; ?>
					</div>

				</div>
				<?php }; ?>
			</div>


		</div>

	</div>
	<div class="copyright text-center">
		<h4>© 2019 Corporación Chamluci S.A.C. Todos Los Derechos Reservados. Realizado Por Tecnoblack.</h4>
	</div>
</footer>

<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>