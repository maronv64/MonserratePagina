@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">    
    
                <div class="col-md-3">
                    @include('admin.dashboard')
                </div>
                <div class="col-md-9">
    

                    <form action="{{url('/social_form')}}" method="POST">   
                        @csrf             
                    <div class="card">
                        <div class="card-header">
                            Social
                        </div>

                    <div class="card-body">

                                <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                            </div>
                                            <select name= "idtipo" class="custom-select" id="inputGroupSelect01">
                                            <option selected>...</option>
                                            @foreach($lista_tipo_social as $item)
                                                <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                            @endforeach
                                            </select>
                                </div>

                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Titulo   </span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo">
                                </div>   
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion">
                                </div>

                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                   <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                  </div>
                                  <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
                                     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  </div>
                                </div>                      

                                <input type="submit" class="btn btn-info" value="Guardar"> 
                        </div>
                    </div>
                    </form>
                    <table class="table table-bordered">
                                <thead class="thead bg-primary text-white">
                                        <tr>
                                            <th scope="col">Tipo Social</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Descripcion</th> 
                                            <th scope="col">Acciones</th>               
                                        </tr>
                                </thead>

                            <tbody>

                                @foreach($lista_social as $item)
                                    <tr>
                                        <th scope="row">{{$item["tiposocial"]["descripcion"]}}</th>
                                        <th scope="row">{{$item["titulo"]}}</th>

                                        <th>{{$item["descripcion"]}}</th>

                                        <td>
                                                <a href="#" onclick="verSocial(<?php echo $item['id']?>)" class="btn btn-info" >Modificar</a>
                                            <form action="{{route('social_form.destroy',$item['id'])}}" method="POST">
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

@include('admin.Social.ModalSocial')
@endsection