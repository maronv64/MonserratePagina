function verEspecialidad(id) {
    //alert("este es id :"+id);
    
    $.get('Especialidades_control/'+id,function (data) {
        $("#idEspecialidad").val(id);
        $("#descripcionEspecialidad").val(data.descripcion);
    });
    $(".hola").modal("show");
}