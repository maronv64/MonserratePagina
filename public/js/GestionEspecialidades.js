var listaidmateria=[];
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
    $("#idEspecialidades_").val(id);
    listaidmateria.length=0;
    $.get('Especialidades_control/'+id,function (data) {
        $.each(data.lista_materias,function (a,item) {
            // console.log(item);
            $('#tabla_materias tr').each(function () {
                $(this).find("td:eq(0) input[type='checkbox']").each(function () {
                    //alert($(this).val());
                

//console.log($(this).val());
                    if (item.materia.id==$(this).val()) {
                        $(this).attr('checked',true);
                        listaidmateria.push(item.materia.id.toString());
                       // console.log($(this).val());
                    }
                // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
                });
            })
            
        });
    });
    $(".especialidadMateria").modal("show");
}

function pasaridmateria(obj) 
{
    var id=$(obj).val();
//console.log(id);
    if(obj.checked == true){

        if (listaidmateria.length== 0) {//la lista esta limpia 
            listaidmateria.push(id);
            //console.log(listaidmateria);
        } 
        if (listaidmateria.indexOf(id)=="-1") {//ese elemento no esta dentro de la lista
            listaidmateria.push(id);
            //console.log(listaidmateria);
        } 
    } else if(obj.checked == false){
        console.log(id);
        removeItemFromArr(listaidmateria,id);
        //var indice = listaidmateria.indexOf(id);
        //listaidmateria.splice(indice, 1);
        console.log(listaidmateria);
    }
    // console.log(listaidtipo);
    $("#listaMateriasId").val(listaidmateria);
//   alert(id);
}
function removeItemFromArr ( arr, item ) {
    var i = arr.indexOf( item );

    if ( i !== -1 ) {
        arr.splice( i, 1 );
    }
}