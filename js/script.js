var tipo = false;

function agregar(){
	
	let valor = "append";
	
	if(tipo==false){
		tipo=true;			
		$("#tabla").append("<tbody>"+ valor +"</tbody>");
	}
	else {
		valor="prepend";
		tipo=false;
		$("#tabla").append("<tbody>"+ valor +"</tbody>");
	}

}