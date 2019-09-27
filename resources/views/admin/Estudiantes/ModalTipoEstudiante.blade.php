
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar</button> -->

<div class="modal fade TipoE bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <div class="modal-header" style="background-color: #007bff;">
            <h5 class="card-title text-white">Tipos de Estudiantes</h5>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead class="thead bg-primary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Escoger</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lista_TipoEstudiante as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item['descripcion']}}</td>
                        <td> 
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>         
                        </td>
                    </tr>
                @endforeach
                    <!-- <tr>
>                                        <th scope="row">1</th>
                    <td></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                    </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-info btn-lg btn-block">Agregar</button>
        </div>
    </div>
    </div>
</div>