
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
mostrarProductosCarrito();

	function mostrarProductosCarrito(){

		var estructura = '<div class="col border shadow  cotizacion">'+
			'<img src="adminchamluci/img/imagen"  alt="">'+
				'<p>titulo</p>'+
				'<div class="cantidads">'+
					'<p>cantidad</p>'+
					'<input type="number" value="1" id="cantidades" onkeyup="cambiarValor(id);">'+
					'<input type="hidden" id="idhidden" value="1">'+
				'</div>'+
				'<button class="buttom" onclick="eliminarProducto(id);">'+
					'Eliminar'+
				'</button>'+
		'</div>'+
		'</br>';
		
		
		var nProductos= sessionStorage.productos.split(",");
		var cantidadProductos =nProductos.length;

		var contenedor = document.getElementById('productos');
		

		var request = new XMLHttpRequest();

	

		var id=nProductos[0];	
		var url = 'backend/backend.php?funcion=ProductosParaCarrito&id='+id;

		request.open('GET', url);
		request.send();

		request.onreadystatechange =productoCotizado(request.responseText, request.readyState)

			
		
		function productoCotizado(data, estado){
			if(estado == 4){
				datosC= JSON.parse(data); 
				
				estructura2 = estructura.replace('imagen', datosC['img1']);
				estructura2 = estructura2.replace('titulo', datosC['titulo']);
				estructura2 = estructura2.replace('cantidades', 'cantidad-'+datosC['id']);
				estructura2 = estructura2.replace('idhidden', 'idhidden-'+datosC['id']);
				estructura2 = estructura2.replace('cambiarValor(id);', 'cambiarValor('+datosC['id']+');');
				estructura2 = estructura2.replace('eliminarProducto(id);', 'eliminarProducto('+datosC['id']+');');
				console.log(estructura2)
				
				contenedor.insertAdjacentHTML('beforeend',estructura2);
				


			}else{
				console.log('error')
			}
		};


		};
		








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