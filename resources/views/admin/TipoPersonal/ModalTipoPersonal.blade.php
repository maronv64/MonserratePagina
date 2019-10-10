

<div class="modal fade MTipoPersonal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-container">
                  <div class="modal-header">
                     Modificar Tipo Personal
                  </div>
                        <form  class="needs-validation" action="{{route('tipopersonal_form.update',1)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                        <div class="modal-body">

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
                            </div>
                            <input type="hidden" id="idTipoPersonal" name="id">
                            <input id="descripcionTipoPersonal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion" required>
                        </div>  
                          <div class="modal-footer">
                          <input type="submit" class="btn btn-info" value="Actualizar">
                          </div> 
             </div>
            </form>    
        </div>     
     </div>              
   </div>     
</div>     
