function verEspecialidad(id) {
    //alert("este es id :"+id);
    
    $.get('Especialidades_control/'+id,function (data) {
        $("#idEspecialidad").val(id);
        $("#descripcionEspecialidad").val(data.descripcion);
    });
    $(".especialidad").modal("show");
}
function verMateriaE(id) {
    //  alert("este es id :"+id);
    $.get('Especialidades_control/'+id,function (data) {
       
    });
    $(".especialidadMateria").modal("show");
}