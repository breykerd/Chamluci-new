

if( screen.width < 440 ) {

	console.log(screen.availWidth);

	

	var header =document.getElementById('header');
	header.style.display='none';
	
	var elemento =document.getElementById('header-2');
	elemento.style.display='block';
	
	
	 
	
		
	}else{

(function(w,d,undefined){
 
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
 
}(window, document));


 function subMenu(){
	 
	var subMenu=document.getElementById("sub-menu");
	var clase= subMenu.classList.contains('visible');
	if (clase==false){
		subMenu.className += " visible";
	}
	
	

}
function subMenu2(){
	var subMenu=document.getElementById("sub-menu");
	var clase= subMenu.classList.contains('visible');
	if (clase==true){
		setTimeout(remover,5000)
		console.log("se ejecuta");
	};
 function remover(){
	 subMenu.classList.remove('visible');
 }








	console.log('telefno');
	
	var header =document.getElementById('header');
	header.style.display='block';

	var elemento =document.getElementById('header-2');
	elemento.style.display='none';
	

}
}

function clases (){
	el_body = document.getElementsByTagName('body')[0];
	el_body.classList.toggle("visible_menu");
}