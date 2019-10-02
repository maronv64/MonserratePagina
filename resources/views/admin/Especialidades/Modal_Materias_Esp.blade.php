<div class="modal especialidadMateria bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                    <div class="modal-container">
                        <div class="modal-header">
                            Agregar Materias
                        </div> 
                        <div class="modal-body">

                           
                              <form action="{{url('/relacion_especialidades_materias')}}" method="POST">
                                    <input type="hidden" id="idEspecialidades_" name="idEspecialidades"> 
                                    <input type="hidden" id="listaMateriasId" name="listaMateriasId"> 
                                  @csrf
                                  <table class="table table-bordered">
                                              <thead class="thead bg-primary text-white" >
                                                <tr>
                                                  <th scope="col">Materias</th>
                                                  <th scope="col">Escoger</th>
                                                  
                                                </tr>
                                              </thead>
                                              <tbody id="tabla_materias">
                                              
                                                @foreach($lista_materias as $item)
                                                        <tr>
                                                            <th scope="row"> {{$item["descripcion"]}}</th>
                                                            <td> 
                                                                    <div class="form-check">
                                                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox_{{$item['id']}}" value="<?php echo $item['id'] ?>" aria-label="..." onclick="pasaridmateria(this)" >
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
