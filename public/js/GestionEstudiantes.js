function verEstudiantes(id){
    $.get('estudiante/'+id,function(data){
        $("#idEstudiante").val(id);
        $("#descripcionTipoEstudiante").val(data.descripcion);
    });
    $(".Estudiante").modal("show");


}