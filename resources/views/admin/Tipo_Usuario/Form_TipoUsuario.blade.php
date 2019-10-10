@extends('layouts.app')

@section('content')

                      
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
          @include('admin.dashboard')
        </div>
        <div class="col-md-9">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">Dashboard</div> --}}

                {{-- <div class="card-body"> --}}
                      <form class="needs-validation" action ="{{url('/tipo_usuario')}}" method="POST">  
                              @csrf 
                              @method('POST')                
                                  <div class="card ">
                                      <div class="card-header" style="background: #007bff" >
                                      <h5 class="card-title text-white">Tipo de Usuario </h5>
                                      </div>
                                      <div class="card-body">
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
                                          </div>
                                          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="descripcion" required>
                                          &nbsp;
                                          <input type="submit" value="agregar" class="btn btn-primary">
                                        </div>
                                      </div>
                                  </div>
                      </form> 
                      <table class="table">
                          <thead class="thead bg-primary text-white" >
                            <tr>
                              <th scope="col">Código</th>
                              <th scope="col">Descripciòn</th>                               
                              <th scope="col">Opciones </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($lista_tipoUsuario as $item)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item['descripcion']}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" onclick = "verTipoUsuario(<?php echo $item['id'] ?>)">Modificar</button>
                                    <form action="{{route('tipo_usuario.destroy',$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method("DELETE")                
                                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </td>
                              </tr>
                            @endforeach                                                                                                                               
                          </tbody>
                      </table>
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>

@include('admin.Tipo_Usuario.Modal_TipoUsuario')
@endsection
