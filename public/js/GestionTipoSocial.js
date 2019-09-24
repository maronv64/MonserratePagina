function verTipoSocial(id) {
    
     $.get('tiposocial_form/'+id, function(data){
         $("#descripcionTipoSocial").val(data.descripcion);
     }
     );

     $(".MTipoSocial").modal("show");
    
}
function name(params) {
    
}