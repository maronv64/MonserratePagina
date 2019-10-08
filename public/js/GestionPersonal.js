function verPersonal(id) {
    
    $.get('personal_form/'+id, function(data){
       $("#idPersonal").val(id);
        $("#nombresPersonal").val(data.nombres);
        $("#apellidosPersonal").val(data.apellidos);
        $("#cedulaPersonal").val(data.cedula);
        $("#tituloPersonal").val(data.titulo);
        $("#cargoPersonal").val(data.cargo);
        $("#telefonoPersonal").val(data.telefono);
    }
    );
    $(".MPersonal").modal("show");
   
}
function gp_verTipoPersonal(id) {
    $("#idPersonal_").val(id);
    //  alert("este es id :"+id);
    $.get('personal_form/'+id,function (data) {
        $.each(data.lista_tipo_personal,function (a,item) {
            // console.log(item);
            $('#tabla_tipo_personal tr').each(function () {
                $(this).find("td:eq(0) input[type='checkbox']").each(function () {
                    //alert($(this).val());
                

                    console.log($(this).val());
                    if (item.tipo_personal.id==$(this).val()) {
                        $(this).attr('checked',true);
                        listaidmateria.push(item.materia.id);
                    }
                // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
                });
            })
            console.log(item);
        });
    });
    $(".personalTipoPersonal").modal("show");
}
var listaidtipopersonal=[];
function pasaridtipopersonal(obj) 
{
    //debugger
    var id=$(obj).val();

    if(obj.checked == true){

        if (listaidtipopersonal.length== 0) {//la lista esta limpia 
            listaidtipopersonal.push(id);
            console.log(listaidtipopersonal);
        } 
        if (listaidtipopersonal.indexOf(id)=="-1") {//ese elemento no esta dentro de la lista
            listaidtipopersonal.push(id);
            console.log(listaidtipopersonal);
        } 
    } else if(obj.checked == false){
        var indice = listaidtipopersonal.indexOf(id);
        listaidtipopersonal.splice(indice, 1);
        // console.log(listaidmateria);
    }
    // console.log(listaidtipo);
    $("#listaTipoPersonalId").val(listaidtipopersonal);
//   alert(id);
}