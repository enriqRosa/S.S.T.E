function btn_cambiar_pass(){
var datos="action=cambiar_password";
$.post("../../../controlador/password_controlador.php", datos, function(data){
alert(data);
    $('#Principal').html(data);
});
}
