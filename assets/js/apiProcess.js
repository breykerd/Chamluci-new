CategoryList();




function CategoryList(){
//creacion del objeto que  contiene la configuracion del servidor
    var connection = new XMLHttpRequest();

    // variable que contiene el valor que sera enviado al servidor

    
    //apertura de conexion con el servidor
	connection.open('POST','backend/api.php', true);
    //configuracion adicional para envio de informacion via metodo post
    connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //envio de la variable al servidor
    connection.send("Consulta=Categoria");


    //funcion que sera ejecutada cuando el servidor Responda 
   connection.onreadystatechange = function(){
    estado=connection.readyState;


        if(estado == 1 || estado == 2 || estado ==3){
            //mensaje de cargando en las primeras 3 etapas de conexion del servicio
                
                //var texto='"<h5  class="pull-left m-a0">Cargando . . . .</h5>"';
                //document.getElementById("sample-message").innerHTML=texto;
        console.log('cargando . . .')
            }else if (connection.readyState == 4) {
        
        //document.getElementById("sample-message").innerHTML="";
        //document.getElementById("sample-message2").innerHTML="";
       // var respuesta = JSON.parse(this.responseText);
       // console.log(respuesta);
         //printListCategory(respuesta);
       
                
        
            };

   
//mensaje de prueba para verificar la instancia connection
//console.log(connection.response);
    }
};



function printListCategory(respuesta){
estructura = '<li>'+
'<h2> <a href="urlAmigable" class="text-primary">nombreCategoria</a></h2>'+
'</li>';
resultados=respuesta.length;

for (var cont = 0; cont <= resultados; cont++) 
		{
			
			
			

			
		fila = estructura.replace('urlAmigable',respuesta[cont].id+'-'+respuesta[cont].url).replace('nombreCategoria',respuesta[cont].titulo);
		tableTr = document.createElement('div');
		tableTr.innerHTML= fila;
		verMas= document.createElement('tr');
		

		document.getElementById('subMenu').appendChild(tableTr);
}

}





