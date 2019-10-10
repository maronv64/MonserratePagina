<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".hola">hola </button> -->

<div class="modal fade MTipoSocial bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-container">
                    <div class="modal-header">
                        Modificar Tipo Social
                    </div> 

                    <form   class="needs-validation" action="{{route('tiposocial_form.update',1)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <!-- <input name="_method" type="hidden" value="PATCH"> -->

                        <div class="modal-body">
                                <!-- <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                                 <label class="input-group-text" for="inputGroupSelect01">Especialidades</label>
                                        </div>
                                         <select class="custom-select" id="inputGroupSelect01">
                                                <option selected></option>
                                                <option value="1">Ciencias </option>
                                                <option value="2">Tecnico</option>
                                                
                                        </select> 

                                        <a href="#" class="btn btn-info">Agregar Materias</a>
                              </div> -->
                              
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Descripcion </span>
                                </div>
                                <input type="hidden" id="idTipoSocial" name="id">
                                <input id="descripcionTipoSocial" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion" required>
                              </div>
                        </div>   
                        <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="Actualizar">
                        </div> 
                   </form>                    
              </div>
            </div>
          </div>
        </div>