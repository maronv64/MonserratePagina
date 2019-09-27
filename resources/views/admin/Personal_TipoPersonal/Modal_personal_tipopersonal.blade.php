 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tipo Personal</button> -->

<div class="modal personalTipoPersonal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-container">
                <div class="modal-header">
                    Agregar Tipo Personal
                </div> 
                    <div class="modal-body">
                        <form action="{{url('/personal_form')}}" method="POST">
                            @csrf
                                <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white" >
                                        <tr>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Escoger</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lista_personal as $item)
                                            <tr>
                                                <th scope="row">{{$item["nombres"]}}</th>
                                                <td> 
                                                    <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                </table>    
                        </form>
                    </div>   
                    <div class="modal-footer">
                            <input type="submit" class="btn btn-info" value="Actualizar"> 
                    </div> 
                                
            </div>
        </div>
    </div>
</div>
