function verTipoPersonal(id) {
    
    $.get('tipopersonal_form/'+id, function(data){
       $("#idTipoPersonal").val(id);
        $("#descripcionTipoPersonal").val(data.descripcion);
    }
    );

    $(".MTipoPersonal").modal("show");
   
}
function name(params) {
   
}