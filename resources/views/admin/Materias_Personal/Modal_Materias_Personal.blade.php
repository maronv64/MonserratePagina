
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Docentes </button> -->

        <div class="modal materiaPersonal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-container">
                    <div class="modal-header">
                      Agregar Docentes
                    </div> 
                        <div class="modal-body">
                            <!-- <div class="container">
                                <div class="row">
                                    <div class="col-md-12"> -->
                                        <form action="{{url('/materia_control')}}" method="POST">
                                                @csrf
                                                <table class="table table-bordered">
                                                        <thead class="thead bg-primary text-white" >
                                                          <tr>
                                                            <th scope="col">Docentes</th>
                                                            <th scope="col">Escoger</th>
                                                            
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($lista_materias as $item)
                                                                <tr>
                                                                    <th scope="row">{{$item["descripcion"]}}</th>
                                                                    <td> 
                                                                        <div class="form-check">
                                                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                                        </div>
                                                                    
                                                                    </td>
                                                                    
                                                                </tr>
                                                            @endforeach
                                                            <!-- <tr>
                                                                <th scope="row">Roberto Anthonio Parraga Zambrano</th>
                                                                <td> 
                                                                    <div class="form-check">
                                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                                    </div>
                                                                </td>
                                                                     
                                                            </tr> -->
                                                        </tbody>
                                                </table>  
                                        </form>
                        
                                    <!-- </div>
                                </div>    
                            </div> -->
                          
                                
                        </div>   
                        <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="Actualizar">                        
                         </div> 
                                       
              </div>
            </div>
          </div>
        </div>
