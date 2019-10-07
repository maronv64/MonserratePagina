function verEnlace(id) {
    //alert("este es id :"+id);
    
    $.get('enlace/'+id,function (data) {
        $("#idEnlace").val(id);
        $("#nameEnlace").val(data.name);
        $("#urlEnlace").val(data.url);
    });
    $(".modal_enlace").modal("show");
}