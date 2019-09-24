function verTipoUsuario(id) {
    //alert("este es id :"+id);
    
    $.get('tipo_usuario/'+id,function (data) {
        $("#idTipousuario").val(id);
        $("#descripcionTipoUsuario").val(data.descripcion);
    });
    $(".modal_tipousuario").modal("show");
}