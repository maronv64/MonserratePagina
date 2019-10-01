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
    //alert("esta id es de esta modal "+ id);
    $("#idEstudiante_").val(id);

    $.get('estudiante/'+id,function(data){

        $.each(data.lista_tipos,function (a,item) {
            // console.log(item);
            $('#tabla_tipos_estudiantes tr').each(function () {
                $(this).find("td:eq(2) input[type='checkbox']").each(function () {
                    //alert($(this).val());
                    if (item.tipo.id==$(this).val()) {
                        $(this).attr('checked',true);
                        listaidtipo.push(item.tipo.id);
                    }
                // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
                });
            })
            
        });
        
    });
    

console.log(listaidtipo);
    $(".TipoE").modal("show");
    
}

var listaidtipo=[];
function pasaridtipo(obj) 
{
    var id=$(obj).val();

    if(obj.checked == true){

        if (listaidtipo.length== 0) {//la lista esta limpia 
            listaidtipo.push(id);
        } 
        if (listaidtipo.indexOf(id)=="-1") {//ese elemento no esta dentro de la lista
            listaidtipo.push(id);
        } 
    } else if(obj.checked == false){
        var indice = listaidtipo.indexOf(id);
        listaidtipo.splice(indice, 1);
        console.log(listaidtipo);
    }
    // console.log(listaidtipo);
    $("#listaTiposId").val(listaidtipo);
    
}