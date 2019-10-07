

                
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">tipo de usuario</button> -->

                 <div class="modal_enlace modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                        
                        <div class="modal-content">
                                 <div class="modal-header"  style="background: #007bff">
                                 
                                                                      
                                    <h5 class="card-title text-white">Enlace</h5>
            
                                 </div>
                                 <form action="{{route('enlace.update',1)}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <input type="hidden" id="idEnlace" name="id">

                                    <div class="modal-body">
                                    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                                </div>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nameEnlace" name ="nombre">  

                                            &nbsp;

                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">url</span>
                                                </div>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="urlEnlace" name ="url">                                                                                                                                    
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                            <input type="submit" class="btn btn-info" value ="modificar">                                    
                                    </div>                            
                                </form>
                         </div>
                        
                     </div>
                 </div>
             
