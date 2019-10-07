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
                                            <form action="{{url('/relacion_materias_personal')}}" method="POST">
                                                     <input type="hidden" id="idMaterias_" name="idMaterias"> 
                                                     <input type="hidden" id="listaPersonalId" name="listaPersonalId"> 
                                                    @csrf
                                                    <table class="table table-bordered">
                                                            <thead class="thead bg-primary text-white" >
                                                            <tr>
                                                                <th scope="col">Docentes</th>
                                                                <th scope="col">Escoger</th>
                                                                
                                                            </tr>
                                                            </thead>

                                                            <tbody id="tabla_personal">
                                                                @foreach($lista_person as $item)
                                                                    <tr>
                                                                        <th scope="row">{{$item["nombres"]}} {{$item["apellidos"]}}</th>
                                                                        <td> 
                                                                            <div class="form-check">
                                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox_{{$item['id']}}" value="<?php echo $item['id'] ?>" aria-label="..." onclick="pasaridpersonal(this)">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
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