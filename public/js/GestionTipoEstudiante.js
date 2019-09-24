function verTipoEstudiante (id){
    $.get('tipo_estudiante/'+id,function(data){
        $("#descripcionTipoEstudiante").val(data.descripcion);
    });
    $(".TipoEstudiante").modal("show");
}