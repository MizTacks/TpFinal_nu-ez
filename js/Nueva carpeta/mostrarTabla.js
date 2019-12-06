var datos;
$.ajax({
	type: "get",
    url: "../PHP/mostrarApi.php", 
	data: "",
    success : function(data) {
        datos = JSON.parse(data);
		console.log(datos);
		recorrido();
	},
	error: function(data){console.log(data);}
});

function recorrido(){
	$.each(datos,function(index, dato){
		pintar(dato['Nombre'], dato['Marca'], dato['Precio'], dato["Descripcion"]);
	});
}
function pintar(Nombre, Marca, Precio, Descripcion){
    var estructura = ' \
    <tr>\
        <td >'+ Nombre +'</td>\
        <td >'+ Marca +'</td>\
        <td >'+ Precio +'</td>\
        <td >'+ Descripcion +'</td>\
        <td >\
            <button onclick="eliminar(\''+ Nombre +'\');" >Borrar</button>\
            <button onclick="modificar(\''+ Nombre +'\');" >Modificar</button>\
        </td >\
    </tr>\
    ';

    $("#body").append(estructura);    
}