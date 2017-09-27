$(document).ready(function(){
    $("#boton").click(function(){
    	var id_escuela = $('#selescuela').val();
    	if (id_escuela == "nada") {
			alert("Por favor selecciona una escuela");
		}
    });
});