function verUsuario(id) {
    // alert("este es id :"+id);
    
    $.get('users/'+id,function (data) {
        console.log(data);
        $("#cmbTusuario").val(data.idtipo);
        $("#idUsuario").val(id);
        $("#nombreUsuario").val(data.name);
        $("#email").val(data.email);
        $("#contraseña").val(data.password);
    });
    $(".modalUsuario").modal("show");
}