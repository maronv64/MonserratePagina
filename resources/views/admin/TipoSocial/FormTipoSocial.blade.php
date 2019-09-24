@extends('layouts.app')

@section('content')

    <form action="{{url('/tiposocial_form')}}" method="POST">
            @csrf                    
        <div class="card ">
            <div class="card-header" style="background: #007bff" >
            <h5 class="card-title text-white">Tipo de Social </h5>
            </div>
            <div class="card-body">
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion">
                            &nbsp;
                            <!-- <button type="button" class="btn btn-info">Agregar</button> -->
                            <input type="submit" class="btn btn-info" value="Agregar"> 
                            </div>
            </div>
        </div>
    </form> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                                <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white">
                                          <tr>
                                              <th scope="col">Codigo</th>
                                              <th scope="col">Descripcion</th>
                                              <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                
                                                @foreach($lista_tipo_social as $item)
                                                <tr>
                                                    <th scope="row">
                                                        1
                                                    </th>  
                                                     <td>{{$item["descripcion"]}}</td>
                                                    <td >
                                                          <button type="button" class="btn btn-info">Modificar</button>
                                                          <form action="{{url('tiposocial_form/'.$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method('DELETE')                
                                                             <input type="submit" class="btn btn-danger" value="Eliminar">
                                                          </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                       </tbody>
                                </table>
            </div>
        </div>
    </div>
@endsection