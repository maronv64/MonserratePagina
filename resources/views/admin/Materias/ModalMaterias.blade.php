
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar </button> -->

        <div class="modal materia bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-container">
                    <div class="modal-header">
                        Modificar Materias
                    </div> 
                    <form action="{{route('materia_control.update',1)}}" method="POST">
                              @csrf
                              @method('PATCH')
                        <div class="modal-body">
                                <!-- <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Materias</label>
                                  </div>
                                  <select class="custom-select" id="inputGroupSelect01">
                                          <option selected></option>
                                          <option value="1">Programacion</option>
                                          <option value="2">Matematica</option>
                                          <option value="3">Lengua y Literatura</option>
                                          <option value="4">Bioligia</option>
                                          <option value="5">Fisica</option>
                                          <option value="6">Quimica</option>
                                          <option value="7">Anatomia</option>
                                          <option value="8">Psicologia</option>
                                          <option value="9">Historia</option>
                                          <option value="10">Ingles</option>
                                  </select>
                                  <a href="#" class="btn btn-info">Agregar Docente</a>
                                </div>
                                -->
                                <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Descripcion </span>
                                          </div>
                                          <input type="hidden" id="idMaterias" name="id">
                                          <input id="descripcionMaterias" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion">
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
