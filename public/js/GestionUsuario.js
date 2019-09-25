function verUsuario(id) {
    //alert("este es id :"+id);
    
    $.get('tipo_usuario/'+id,function (data) {
        $("#idUsuario").val(id);
        $("#nombreUsuario").val(data.nombre);
        $("#email").val(data.email);
        $("#contraseña").val(data.contraseña);
    });
    $(".modalUsuario").modal("show");
}