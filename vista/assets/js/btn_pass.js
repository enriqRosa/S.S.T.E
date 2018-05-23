function btn_cambiar_pass(){
alert("entrando");
var datos="action=cambiar_password";
alert(datos);
$.post("../controlador/password_controlador.php", datos, function(data){
alert(data);
    $('#Principal').html(data);
});
}