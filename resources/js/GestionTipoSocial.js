function verTipoSocial(id) {
    $.get('tiposocial_form/'+id, function(data){
        $("#descripcionTipoSocial").val(data.descripcion);
    }
    );

    $(".TipoSocial").modal("show");
    
}