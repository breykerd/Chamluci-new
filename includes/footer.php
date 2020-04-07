
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
						<i class="fa fa-facebook-square iconSocial"></i>
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
for ($i= 1; $i<=2; $i++)
{
?>				
				 
				<div class="container">
				<div class="sub-col-1">
					<img src="assets/images/imagen-4.png" alt="">
				</div>
				<div class="sub-col-2">
					<h4>Nombre del producto extremadamente largo <?php echo $i; ?></h4>
					<a href="#" class="text-primary"> Ver Más</a>
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
$contenido= array("Av. Santa Rosa # 424 - Santa Anita - Lima - Perú","01 - 478 0646","ventas@corporacionchamluci.com","947153316 / 934717709");	
$icons= array("fa-map-marker","fa-phone","fa-envelope-o","fa-whatsapp");

for ($i= 0; $i<=3; $i++)
{
?>	
				<div class="container">
					<div class="sub-col-1">
							<i class="fa <?php echo $icons[$i]; ?>"> </i>
					</div>
					<div class=sub-col-2>
					<a href=""><?php echo $contenido[$i]; ?></a>
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