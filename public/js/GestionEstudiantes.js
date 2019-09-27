function GE_verEstudiantes(id){
    $.get('estudiante/'+id,function(data){
        $("#idEstudiante").val(id);
        $("#cmbespecialidadE").val(data.idEspecialidad);
        $("#nombreEstudiante").val(data.nombre);
        $("#apellidoEstudiante").val(data.apellido);
        $("#cedulaEstudiante").val(data.cedula);
    });
    $(".Estudiante").modal("show");

}
function GE_verTipoE(id){
    

    $(".TipoE").modal("show");
}