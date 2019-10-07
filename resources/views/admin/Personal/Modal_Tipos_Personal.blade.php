 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tipo Personal</button> -->

 <div class="modal personalTipoPersonal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-container">
                <div class="modal-header">
                    Agregar Tipo Personal
                </div> 
                <form action="{{url('/relacion_personal_tipo')}}" method="POST">

                    <div class="modal-body">
                                <input type="hidden" id="idPersonal_" name="idPersonal"> 
                                <input type="hidden" id="listaTipoPersonalId" name="listaTipoPersonalId"> 
                                @csrf
                                <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white" >
                                        <tr>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Escoger</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody id="tabla_tipo_personal">
                                        @foreach($lista_tipo_personal as $item)
                                            <tr>
                                                <th scope="row">{{$item["descripcion"]}}</th>
                                                <td> 
                                                    <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox"  id="blankCheckbox_{{$item['id']}}" value="<?php echo $item['id'] ?>" aria-label="..." onclick="pasaridtipopersonal(this)">
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                </table>    
                    </div>   
                    <div class="modal-footer">
                            <input type="submit" class="btn btn-info" value="Actualizar"> 
                    </div> 
                    </form>
                                
            </div>
        </div>
    </div>
</div>
