function verPersonal(id) {
    
    $.get('personal_form/'+id, function(data){
       $("#idPersonal").val(id);
        $("#tipo_personalPersonal").val(data.idtipo);
        $("#nombresPersonal").val(data.nombres);
        $("#apellidosPersonal").val(data.apellidos);
        $("#cedulaPersonal").val(data.cedula);
        $("#tituloPersonal").val(data.titulo);
        $("#telefonoPersonal").val(data.telefono);
    }
    );
    $(".MPersonal").modal("show");
   
}
function gp_verTipoPersonal(id) {
    //  alert("este es id :"+id);
    $.get('personal_form/'+id,function (data) {
       
    });
    $(".personalTipoPersonal").modal("show");
}