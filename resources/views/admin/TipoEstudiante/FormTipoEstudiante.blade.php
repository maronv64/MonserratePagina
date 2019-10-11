@extends('layouts.app')

@section('content')

          

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('admin.dashboard')
        </div>
        <div class="col-md-9">
        <form class="needs-validation" action="{{url('/tipo_estudiante')}}" method="POST">
            @csrf
            @method('POST')
            <div class="card">
                <div class="card-header" style="background-color: #007bff;">
                    <h5 class="card-title text-white">Tipos de Estudiantes</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion" required>
                        &nbsp;
                        <input type="submit" class="btn btn-outline-info" value="Guardar">
                    </div>             
                </div>
            </div>                      
        </form>
    
        <div class="table-responsive"> 
            <table class="table">
                <thead class="thead bg-primary text-white">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listaTipoEstudiante as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$item["descripcion"]}}</td>
                        <td>
                        <a href="#" onclick='GTE_verTipoEstudiante(<?php echo $item["id"] ?>)' class="btn btn-outline-info" >Modificar</a>
                            <form action="{{route('tipo_estudiante.destroy',$item['id'])}}" method="POST">
                                @csrf    
                                @method("DELETE")                
                                <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                            </form>
                        </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div> 
        @include('admin.TipoEstudiante.ModalTipoEstudiante')       
        </div>
    </div>
</div>
@endsection