@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">    

        <div class="col-md-3">
            @include('admin.dashboard')
        </div>
        <div class="col-md-9">
            <form action="{{url('/Especialidades_control')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Especialidades
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Descripcion</label>
                            </div>
                            
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion">
                            
                            </div>
                        <input type="submit" class="btn btn-info" value="Guardar">
                    </div> 
                </div>
            </form>
    
            <table class="table table-bordered">
                    <thead class="thead bg-primary text-white" >
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Materias</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lista_especialidades as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$item["descripcion"]}} </td>
                                <td>
                                @foreach($item["lista_materias"] as $item2)
                                    {{ $item2["materia"]["descripcion"]}}
                                @endforeach
                                </td>
                                <td>
                                    <a href="#" onclick='verMateriaE(<?php echo $item["id"] ?>)' class="btn btn-info">Agregar Materias</a>
                                    <a href="#" onclick='verEspecialidad(<?php echo $item["id"] ?>)' class="btn btn-info" >Modificar</a>
                                    <form action="{{route('Especialidades_control.destroy',$item['id'])}}" method="POST">
                                                    @csrf    
                                                    @method("DELETE")                
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

@include('admin.Especialidades.ModalEspecialidades')
@include('admin.Especialidades_Materias.Modal_Especialidades_Materias')
@endsection