<div class="modal especialidadMateria bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                    <div class="modal-container">
                        <div class="modal-header">
                            Agregar Materias
                        </div> 
                        <div class="modal-body">
                              <form action="{{url('/Especialidades_control')}}" method="POST">
                                  @csrf
                                  <table class="table table-bordered">
                                              <thead class="thead bg-primary text-white" >
                                                <tr>
                                                  <th scope="col">Materias</th>
                                                  <th scope="col">Escoger</th>
                                                  
                                                </tr>
                                              </thead>
                                              <tbody>
                                              
                                                @foreach($lista_materias as $item)
                                                        <tr>
                                                            <th scope="row"> {{$item["descripcion"]}}</th>
                                                            <td> 
                                                                    <div class="form-check">
                                                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                                        </div>
                                                            </td>
                                                                
                                                        </tr> 
                                                @endforeach
                                              </tbody>
                                  </table>    
                                  <div class="modal-footer">
                                          <input type="submit" class="btn btn-info" value="Actualizar">   
                                  </div> 
                              </form>
                        </div>   
                  </div>
              </div>
          </div>
      </div>
