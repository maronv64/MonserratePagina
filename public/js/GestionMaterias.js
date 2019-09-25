function verMateria(id) {
    // alert("este es id :"+id);
    
    $.get('materia_control/'+id,function (data) {
            //console.log(data);
        $("#idMaterias").val(id);
        $("#descripcionMaterias").val(data.descripcion);
    });
    $(".materia").modal("show");
}
function verDocentes(id) {
    //  alert("este es id :"+id);
    // $(".").modal("show");
}