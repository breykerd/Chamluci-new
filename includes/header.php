<header class="site-header">

	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="wt-topbar-center">
					<ul id="correoHeader">
						<li>
							 <a href="mailto:Ventas@corporacionchamluci.com" title="Correo">Ventas@corporacionchamluci.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



<!-- Menu Responsivo -->
	<div class="header-2" id="header-2">
	        <i class="fa fa-shopping-cart fa-5"> </i>
            <a href="/" title="Inicio">
                <img src="assets/images/logo.png" width=50%%; alt="Logo Chamluci">
            </a>
            <a href="#" id="menu_on" onClick="clases();return false;">
			    <span></span>
			    <span></span>
			    <span></span>
            </a>
	</div>
	<nav id="nav">
        <a href="/">
            <img src="assets/images/logo.png" style="margin-top:-4%; margin-left:3%;" alt="">
        </a>	
	    <ul>
		    <li><a href="Inicio">Inicio</a></li>
		    <li><a href="Nosotros">La Empresa</a></li>
		    <li class="subMenu" >
			    <a href="" class="destacado" onclick="mostrarOcultarSubMenu(); return false;">Productos<i class="fa fa-arrow-down" ></i></a> 
			    <ul class="children" id="children">
    <?php 
    $contadorCategorias= count($categoryList) ;
    for ($i=0; $i <$contadorCategorias ; $i++) { 
        $url= $categoryList[$i]['id']."-".$categoryList[$i]['url'];
    ?>
				    <li>
				        <a href="Categoria/<?php echo $url;?>" title="<?php echo mb_strtoupper($categoryList[$i]['titulo']);?>"> <?php echo mb_strtoupper($categoryList[$i]['titulo']);?></a>
				    </li>
    <?php } ?>	


			    </ul>

		    </li>
		
		
		    <li><a href="Blog">Blog</a></li>
		    <li><a href="Contacto">Contacto</a></li>
	    </ul>
    </nav>
    <!-- --------End Menu Responsivo------------ -->


    <!-- -------- Menu ------------ -->

    <div id="header" class="header">
        <div class="container">

	        <div class="row">
	            <div class="Superior">
		            <div class="logo-Header"> 
                        <img src="assets/images/logo.png" alt="Logo Chamluci">
                    </div>
		            <div class="busqueda">
                        <input type="text" placeholder="Busqueda"> 
                        <i class="fa fa-search"></i> 
                    </div>
                    <div class="division">
                        &nbsp;
                    </div>
		            <div class="central">
                        <i class="fa fa-phone"></i>
		                <a href="tel:012222312" title="Central">Central: (01)-222 2312 </a>
                    </div>
		            <div class="redes-sociales">
			            <i class="fa fa-facebook-square iconSocial"></i>
			            <i class="fa fa-twitter iconSocial"></i>
			            <i class="fa fa-youtube iconSocial"></i>
			            <i class="fa fa-instagram iconSocial"></i>
		            </div>
	            </div>
            </div>

            <div class="row">
	            <div class="inferior menu"> 
		            <ul class="menu-inferior">
			            <li class="secciones"><a href="Inicio" title="Inicio">Inicio</a></li>
			            <li class="secciones"><a href="Nosotros" title="Nosotros">La Empresa</a></li>
			            <li class="productos"><a href="" title="Productos">Productos</a> 
			                <div class="sub-menu" id="sub-menu" >
			                    <ul>


        <?php 
            $contadorCategorias= count($categoryList) ;
            for ($i=0; $i <$contadorCategorias ; $i++) { 
                 $url= $categoryList[$i]['id']."-".$categoryList[$i]['url'];
            ?>
				                        <li>
				                            <h2 > 
                                                <a href="Categoria/<?php echo $url;?>" title="<?php echo mb_strtoupper($categoryList[$i]['titulo']);?>" class="text-primary"> 
                                                    <?php echo mb_strtoupper($categoryList[$i]['titulo']);?>
                                                </a>
                                            </h2>
				                        </li>
        <?php } ?>
                                </ul>
                            </div>
		                </li>
			            <li class="secciones"><a href="Blog" title="Blog">Blog</a></li>
			            <li class="secciones"><a href="Contacto" title="Contactos">Contactos</a></li>
		            </ul>	
		            <div class="carrito">
			            <div class="cantidad">
				            <a href="Cotizacion" title="Area de Cotizacion" class="fa fa-shopping-cart"></a>
				            <div class="circulo" id="nun">0</div>
				
			        </div>
		        </div>
	        </div>	
        </div>
    </div>
<!-- End menu  -->
		
<!-- fin menu flotante -->
</header>