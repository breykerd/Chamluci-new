
//var body = document.getElementById('body');
//body.addEventListener('resize',responsive);
responsive();
botones();

// mostrar un menu o otro segun la resolucion
function responsive(){	

if( screen.width < 650 ) {

	var correoHeader = document.getElementById('correoHeader');
	correoHeader.classList.add('correo-Responsive');


	var header = document.getElementById('header');
	header.style.display='none';
	
	var elemento = document.getElementById('header-2');
	var elemento2 = document.getElementById('nav');
	elemento.style.display= 'block'
	elemento2.style.display='block';
	//elemento.style.height='10%';
	
	
	 
	stikyResponsive(window, document);
		
	}else{

	var correoHeader = document.getElementById('correoHeader');
	correoHeader.classList.remove('correo-Responsive');

//muestra menu completo
	var header =document.getElementById('header');
	header.style.display='block';
//oculta menu responsivo
	var elemento =document.getElementById('header-2');
	elemento.style.display='none';
	var elemento2 = document.getElementById('nav');
	elemento2.style.display= 'none'

	//ejecuta el menu stiky
	menuProductos(window, document);




}


}


// funcion que muestra el menu de responsive
function clases (){
	
	el_body = document.getElementsByTagName('body')[0];
	el_body.classList.toggle("visible_menu");
	ocultaSubMenu();
}



// muestra los productos de el menu normal

function menuProductos(w,d){
 
	var el_html = d.documentElement,
		el_body = d.getElementsByTagName('body')[0],
		header = d.getElementById('header'),
		menuIsStuck = function() {


			var wScrollTop	= w.pageYOffset || el_body.scrollTop,
				regexp		= /(nav\-is\-stuck)/i,
				classFound	= el_html.className.match( regexp ),
				navHeight	= header.offsetHeight -20,
				bodyRect	= el_body.getBoundingClientRect(),
				scrollValue	= 5;
 
			if ( wScrollTop > scrollValue && !classFound ) {
				el_html.className = el_html.className + ' nav-is-stuck';
				el_body.style.paddingTop = navHeight + 'px';
			}
 
			if ( wScrollTop < 2 && classFound ) {
				el_html.className = el_html.className.replace( regexp, '' );
				el_body.style.paddingTop = '0';
			}

		},
		onScrolling = function() {
			menuIsStuck();
		};
 
	w.addEventListener('scroll', function(){
		w.requestAnimationFrame( onScrolling );
	});
 
}


//muestra el menu responsive deacuerdo al tamaño de pantalla

function stikyResponsive(w,d){
 
	var el_html = d.documentElement,
		el_body = d.getElementsByTagName('body')[0],
		header = d.getElementById('header-2'),
		menuIsStuck = function() {


			var wScrollTop	= w.pageYOffset || el_body.scrollTop,
				regexp		= /( nav\-is\-stuck)/i,
				classFound	= el_html.className.match( regexp ),
				navHeight	= header.offsetHeight -20,
				bodyRect	= el_body.getBoundingClientRect(),
				scrollValue	= 5;
 
			if ( wScrollTop > scrollValue && !classFound ) {
				el_html.className = el_html.className + ' nav-is-stuck';
				el_body.style.paddingTop = navHeight + 'px';
			}
 
			if ( wScrollTop < 2 && classFound ) {
				el_html.className = el_html.className.replace( regexp, '' );
				el_body.style.paddingTop = '0';
			}

		},
		onScrolling = function() {
			menuIsStuck();
		};
 
	w.addEventListener('scroll', function(){
		w.requestAnimationFrame( onScrolling );
	});
 
}



// mostrar el submenu de el responsive
function mostrarOcultarSubMenu(){


	children = document.getElementById('children');
	
	if(children.classList.contains('children')){
		children.classList.remove('children');
		children.classList.add('children-visibilite');
	}else{
		children.classList.add('children');
		children.classList.remove('children-visibilite');
	}
}

function ocultaSubMenu(){
	if(children.classList.contains('children-visibilite')){
		children.classList.add('children');
		children.classList.remove('children-visibilite');
	}
}


// carga diferida de imagenes 
document.addEventListener("DOMContentLoaded", function() {
	var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  
	if ("IntersectionObserver" in window) {
	  let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
		entries.forEach(function(entry) {
		  if (entry.isIntersecting) {
			let lazyImage = entry.target;
			lazyImage.src = lazyImage.dataset.src;
			lazyImage.srcset = lazyImage.dataset.srcset;
			lazyImage.classList.remove("lazy");
			lazyImageObserver.unobserve(lazyImage);
		  }
		});
	  });
  
	  lazyImages.forEach(function(lazyImage) {
		lazyImageObserver.observe(lazyImage);
	  });
	} else {
	  // Possibly fall back to a more compatible method here
	}
  });
  
  
  




  //carrito de cotizacion

//compara los arrays para ver si ya el producto esta en el carrito
// de no estarlo lo agrega
  function compararArrays(idProducto){
	var producto=idProducto;

	if (sessionStorage.productos!=undefined) {
	var productos= sessionStorage.productos.split(",");
	}else{
		agregarCarrito(idProducto);
		var productos= sessionStorage.productos.split(",");

	}


	var encuentra = false;
		for(var j =0; j < productos.length;j++){
			 if(producto == productos[j]){
				 encuentra = true;
				 break;
			 }
		}
		if(!encuentra){
		   agregarCarrito(idProducto);
		   
		}
	};

  //funcion que agrega el producto al carrito si este no a sido incluido anteriormente
function agregarCarrito(idProducto){
    if (sessionStorage.productos!=undefined) {
var producto= sessionStorage.productos.split(",");

producto.push(idProducto);
var producto= producto.join();
sessionStorage.productos = producto;

    }else{

var idProductos = [idProducto];
var productos= idProductos.join();
sessionStorage.productos = productos;
	}
	

    botones();
};


//funcion que coloca los botones en cotizar o agregado segun sea su estado 
//se ejecuta al cargar la pagina y al dar click en agregar
function botones(){

    if (sessionStorage.productos!=undefined) {

var producto= sessionStorage.productos.split(",");
var valores = document.getElementsByName('valores');

for(var i =0; i < valores.length; i++){
    
    for(var j =0; j < producto.length;j++){

	var cotizar = document.getElementById('cotizar'+valores[i]['value']);
	var agregado = document.getElementById('agregado'+valores[i]['value']);	

         if(valores[i]['value'] == producto[j]){
            	cotizar.style.display="none";
				agregado.style.display="block";
				agregado.style.marginLeft="15%";        
		 }
    }
    }
iconoCarro();
}else{
	var carrito = document.getElementById('nun');
	carrito.innerText ="0";
}
};



function iconoCarro(){
	if (sessionStorage.productos!=undefined) {
		var nProductos= sessionStorage.productos.split(",");
		var cantidadProductos =nProductos.length;
		var carrito = document.getElementById('nun');
		carrito.innerText =cantidadProductos;
	
	}else{
		var carrito = document.getElementById('nun');
		carrito.innerText ="0";
	}
	};




areaCotizacion();


	function areaCotizacion(){
		
		noProductos = document.getElementById('noProductos');
		panelCotizacion = document.getElementById('cotizacion');

		if(sessionStorage.productos!=undefined){
			noProductos.style.display = 'none';
			mostrarProductosCarrito();

		}else{

			//mostrarMensajeNoProductos();
			panelCotizacion.style.display = 'none';
			noProductos.style.display = 'block';

		}
	}



	function mostrarProductosCarrito(){
		
		var nProductos= sessionStorage.productos.split(",");
		var contenedor = document.getElementById('productos');
		

		var request = new XMLHttpRequest();
		var id=nProductos;	
		var url = 'backend/backend.php?funcion=ProductosParaCarrito&id='+id;

		request.open('GET', url, true);
		request.send();
		request.onreadystatechange = function (){
				if(this.readyState == 4 && this.status == 200){
					contenedor.innerHTML = this.responseText;
					cargando = document.getElementById('cargando');
					cargando.style.display = 'none';
				}else{
					//console.log('cargando')
				}
		};
		};
		
	function cambiarValor(id){
		var valor = document.getElementById('cantidad-'+id).value;
		var valorhidden = document.getElementById('idhidden-'+id);
		valorhidden.value = valor;

	}

	function enviarMensajeCotizacion(){
		var nProductos= sessionStorage.productos.split(",");
		var cantidadProductos =nProductos.length;
		var valores= new Array();
		var datosFormulario= new Array();
		var mensajeModal = document.getElementById('mensajeModal');
		var mensajeTwoModal = document.getElementById('mensajeTwoModal');
		
		for (i = 0; i < cantidadProductos; i++) {
			valores.push(document.getElementById('idhidden-'+nProductos[i]).value);
			
		}
		datosFormulario.push(document.getElementById('ruc').value);
		datosFormulario.push(document.getElementById('nombre').value);
		datosFormulario.push(document.getElementById('correo').value);
		datosFormulario.push(document.getElementById('telefono').value);
		datosFormulario.push(document.getElementById('mensaje').value);

		var url = 'backend/backend.php?funcion=prubacotizacion&idProductos='+nProductos+'&cantidades='+valores+'&datosFormulario='+datosFormulario;
		var request = new XMLHttpRequest();

		request.open('GET', url, true);
		request.send();

		request.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){
				mensaje = JSON.parse(this.responseText);
				if(mensaje.estado == 1){
					mensajeModal.innerHTML = mensaje.mensaje;
					mensajeTwoModal.innerHTML = mensaje.mensajeTwoModal;
					MensajeModal(1);

				}else{
					mensajeModal.innerHTML = mensaje.mensaje;
					mensajeTwoModal.innerHTML = mensaje.mensajeTwoModal;
					MensajeModal(2);
				}

			}else{
				//console.log('cargando')
			}
	};

	}		


	function vaciarCarrito(){
		sessionStorage.clear();
		iconoCarro();
		};




		function eliminarProducto(id){
			var nProductos= sessionStorage.productos.split(",");
			id=id.toString();
			var index = nProductos.indexOf(id);


		if (index > -1) {
		   nProductos.splice(index, 1);
		}
		var productos= nProductos.join();
		sessionStorage.productos = productos;


		if (sessionStorage.productos == "") {
			sessionStorage.clear();
			iconoCarro();
		}

		areaCotizacion();
		iconoCarro();

		}






	//Area Del Blog
	setTimeout('paginarBlog(1);',700); 

	function paginarBlog(page){
		var contenedor = document.getElementById('articulos');
		var url = 'includes/paginacionBlog.php?page='+page;

		var request = new XMLHttpRequest();

		request.onreadystatechange = function(){
			if(request.readyState === 4){
				contenedor.innerHTML = request.responseText;
			}else{
			}
		}

		request.open('GET' , url);
		request.send();

	}






function MensajeModal(estado){
	
		var modal = document.getElementById("tvesModal");
		var btn = document.getElementById("btnModal");
		var span = document.getElementsByClassName("close")[0];
		var body = document.getElementsByTagName("body")[0];
		var modalContent = document.getElementById("modal-content");
		var close = document.getElementById("close");


		if(estado == 1){
			modalContent.style.borderTop = "10px solid #afca52"
			close.style.color="#afca52"
		}else{
			modalContent.style.borderTop = "10px solid #a94442"
			close.style.color="#a94442"
		}
		
		modal.style.display = "block";

			body.style.position = "static";
			body.style.height = "100%";
			body.style.overflow = "hidden";
		

		span.onclick = function() {
			modal.style.display = "none";

			body.style.position = "inherit";
			body.style.height = "auto";
			body.style.overflow = "visible";
		}

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";

				body.style.position = "inherit";
				body.style.height = "auto";
				body.style.overflow = "visible";
			}
		}
	}



	