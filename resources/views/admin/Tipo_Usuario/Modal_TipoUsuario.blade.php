

                
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">tipo de usuario</button> -->

                 <div class="modal_tipousuario modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                        
                        <div class="modal-content">
                                 <div class="modal-header"  style="background: #007bff">
                                 
                                                                      
                                    <h5 class="card-title text-white">Tipo de Usuario </h5>
            
                                 </div>
                                 <form class="needs-validation" action="{{route('tipo_usuario.update',1)}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="modal-body">
                                    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                    <input type="hidden" id="idTipousuario" name="id">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">descripción</span>
                                                </div>
                                                    <input required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="descripcionTipoUsuario" name ="descripcion">                                                                                                                                    
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                            <input type="submit" class="btn btn-info" value ="modificar">                                    
                                    </div>                            
                                </form>
                         </div>
                        
                     </div>
                 </div>
             
