function verTipoSocial(id) {
    
     $.get('tiposocial_form/'+id, function(data){
        $("#idTipoSocial").val(id);
         $("#descripcionTipoSocial").val(data.descripcion);
     }
     );

     $(".MTipoSocial").modal("show");
    
}
function name(params) {
    
}