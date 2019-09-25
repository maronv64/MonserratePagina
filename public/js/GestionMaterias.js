function verMateria(id) {
    //alert("este es id :"+id);
    
    $.get('materias_control/'+id,function (data) {
        $("#idMaterias").val(id);
        $("#descripcionMaterias").val(data.descripcion);
    });
    $(".materia").modal("show");
}