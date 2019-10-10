$('.solonumeros').keyup(function (){
    this.value = (this.value + '').replace(/[^0-9]/g, '');
  });
  function removeItemFromArr ( arr, item ) {
    var i = arr.indexOf( item );

    if ( i !== -1 ) {
        arr.splice( i, 1 );
    }
}