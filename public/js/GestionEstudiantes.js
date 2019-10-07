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
                var fila = this;
                $(this).find("td:eq(2) input[type='checkbox']").each(function () {
                    //alert($(this).val());
                    if (item.tipo.id==$(this).val()) {
                        $(this).attr('checked',true);
                        listaidtipo.push(item.tipo.id);
                        $(fila).find("td:eq(3) input[type='hidden']").attr("type","text");
                        //$(fila).find("td:eq(3) a").attr("value","text");

                    }
                // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
                });

            });
            
        });
        
    });
    


    $("#tabla_tipos_estudiantes tr").each(function (index) {
        // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
        //var valores = $(this).parents("tr").find("td")[1].innerHTML;
    });

console.log(listaidtipo);
    $(".TipoE").modal("show");
    
}
// function AgregarCargo(obj) {
//     $(this).find("td:eq(3) input[type='hidden']").each(function (){
//         $(this).attr("type","text");
//     });
// }

var listaidtipo=[];
var listaCargo=[];

function pasaridtipo(obj) 
{
    var id=$(obj).val();

    if(obj.checked == true){

        if (listaidtipo.length== 0) {//la lista esta limpia 
            listaidtipo.push(id);
            // listaCargo.push($('#cargo_'+id).val());
            // console.log($('#cargo_'+id).val());
            $('#btnGuardarCargo_'+id).css("visibility", "visible");
        } 
        if (listaidtipo.indexOf(id)=="-1") {//ese elemento no esta dentro de la lista
            listaidtipo.push(id);
            $('#btnGuardarCargo_'+id).css("visibility", "visible");
            // listaCargo.push($('#cargo_'+id).val());
            // console.log($('#cargo_'+id).val());
        } 

        $('#cargo_'+id).attr("type","text");

    } else if(obj.checked == false){
        var indice = listaidtipo.indexOf(id);
        listaidtipo.splice(indice, 1);
        // listaCargo.splice(indice, 1);
        // console.log(listaidtipo);
        $('#btnGuardarCargo_'+id).css("visibility", "hidden");
        $('#cargo_'+id).attr("type","hidden");
    }
    // console.log(listaidtipo);
    $("#listaTiposId").val(listaidtipo);
    
}
function GE_guardarCargo(id) {
    var hola = $('#cargo_'+id).val();
    $('#btnGuardarCargo_'+id).removeClass("btn-primary");
    $('#btnGuardarCargo_'+id).addClass("btn-success");

    listaCargo.push($('#cargo_'+id).val());
    $("#listaCargo").val(listaCargo);
    // $("")

    // alert(hola);
}