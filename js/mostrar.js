var datos;
$.ajax({
    url: "PHP/mostrarApi.php", 
    success : function(data) {
        datos = JSON.parse(data);
		console.log(datos);
		recorrido();
	},
	error: function(data){console.log(data);}
});

function recorrido(){
	$.each(datos,function(index, dato){
		pintar(dato['Nombre'], dato['Actor'], dato["Director"], dato['Precio']);
	});
}

function pintar(categoria, nombre, marca, precio, descripcion, imagen){
    var estructura = ' \
    <article class="cubitos">\
                <div class="imagen">\
                    <img src="'+imagen+'" width="100%">\
                </div>\
                <div class="detalle">\
                    <h2>'+nombre+'</h2>\
                    <h3>Marca: '+marca+'</h3>\
                    <h3>Precio: '+precio+' pesitos</h3>\
                    <p>'+descripcion+'</p>\
                </div>\
            </article>\
    ';

    $("#"+categoria).append(estructura);    
}