function verTipoEstudiante (id){
    $.get('tipo_estudiante/'+id,function(data){
        // $("#idTipoEstudiante").val(id);
        $("#descripcionTipoEstudiante").val(data.descripcion);
    });
    $(".TipoEstudiante").modal("show");
}