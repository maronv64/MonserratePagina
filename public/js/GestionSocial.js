function verSocial(id) {
    
    $.get('social_form/'+id, function(data){
       $("#idSocial").val(id);
        $("#tipo_socialSocial").val(data.idtipo);
        $("#tituloSocial").val(data.titulo);
        $("#descripcionSocial").val(data.descripcion);
    }
    );
    $(".MSocial").modal("show");
   
}
function name(params) {
   
}