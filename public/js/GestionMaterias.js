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
    $("#idMaterias_").val(id);
    //  alert("este es id :"+id);
    $.get('materia_control/'+id,function (data) {
        $.each(data.lista_person,function (a,item) {
            // console.log(item);
            $('#tabla_personal tr').each(function () {
                $(this).find("td:eq(0) input[type='checkbox']").each(function () {
                    //alert($(this).val());
                

                    console.log($(this).val());
                    if (item.personal.id==$(this).val()) {
                        $(this).attr('checked',true);
                        listaidpersonal.push(item.personal.id.toString());
                    }
                // console.log( $(this).find("td:eq(2) input[type='checkbox']").val());
                });
            })
            
        });
    });
    $(".materiaPersonal").modal("show");
}
var listaidpersonal=[];
function pasaridpersonal(obj) 
{
    var id=$(obj).val();

    if(obj.checked == true){

        if (listaidpersonal.length== 0) {//la lista esta limpia 
            listaidpersonal.push(id);
            console.log(listaidpersonal);
        } 
        if (listaidpersonal.indexOf(id)=="-1") {//ese elemento no esta dentro de la lista
            listaidpersonal.push(id);
            console.log(listaidpersonal);
        } 
    } else if(obj.checked == false){
        removeItemFromArr(listaidpersonal,id);
        // console.log(listaidmateria);
    }
    // console.log(listaidtipo);
    $("#listaPersonalId").val(listaidpersonal);
//   alert(id);
}