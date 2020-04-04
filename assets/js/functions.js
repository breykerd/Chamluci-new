
//var body = document.getElementById('body');
//body.addEventListener('resize',responsive);
responsive();


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