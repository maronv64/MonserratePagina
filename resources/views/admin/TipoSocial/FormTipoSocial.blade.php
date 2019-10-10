@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">    
    
                <div class="col-md-3">
                    @include('admin.dashboard')
                </div>
                <div class="col-md-9">
    
                    <form action="{{url('/tiposocial_form')}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                Tipo Social
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
                    <!-- <form action=""> -->
                    <table class="table table-bordered">
                            <thead class="thead bg-primary text-white" >
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lista_tipo_social as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                            <th>
                                                {{$item["descripcion"]}}
                                            </th>
                                    
                                        <td>
                                            
                                            <a href="#" onclick='verTipoSocial(<?php echo $item["id"]?>)' class="btn btn-info" >Modificar</a>

                                            <!-- {{-- <form action="{{url('tiposocial_form/'.$item['id'])}}" method="POST"> --}} -->
                                            <form action="{{route('tiposocial_form.destroy',$item['id'])}}" method="POST">
                                                            @csrf    
                                                            @method("DELETE")                
                                                <input type="submit" class="btn btn-danger" value="Eliminar">
                                            </form>
                                            
                                            <!-- <a href="{{route('Especialidades_control.destroy',$item['id'])}}">elim</a> -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>    
                </div>
        </div>
</div>
@include('admin.TipoSocial.ModalTipoSocial')
@endsection