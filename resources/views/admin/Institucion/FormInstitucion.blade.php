@extends('layouts.app')

@section('content')

<div class="card-body">
     <div class="container">
         <div class="row justify-content-center">

            <div class="col-md-3">
                        @include('admin.dashboard')
            </div>

             <div class="col-md-9">
            
                 <div class="card">
                     <div class="card-header" style="background: #007bff">Institucion</div>

                    <div class="card-body">
                         <form class="needs-validation" action="{{url('/institucion')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">mision</span>
                                        </div>
                                        <textarea required name="mision" class="form-control" aria-label="With textarea"></textarea>
                                    </div>                                                       
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">vision</span>
                                        </div>
                                        <textarea required name="vision" class="form-control" aria-label="With textarea"></textarea>
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">himno</span>
                                        </div>                                                        
                                        <textarea required name="himno" class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <!-- <input type="file" name ="file"> -->
                                <div class ="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">actualizar</span>
                                        </div>
                                        <div class="custom-file">
                                            <input required type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
                                            <label class="custom-file-label" for="inputGroupFile01">escoger archivo</label>
                                        </div>
                                   </div>
                                </div>                                
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">                                            
                                              <input type="submit" class="btn btn-info" value ="agregar">                                            
                                        </div>
                                    </div>                                    
                                 </div> 

                                    
                         </form>  
                         <div class="table responsive">
                             <table class="table">
                                 <thead class="thead bg-primary text-white">
                                     <tr>
                                        <th scope="col">mision </th>
                                        <th scope="col">vision</th>
                                        <th scope="col">himno</th> 
                                        <th scope="col">imagen</th>                                     
                                        <th scope="col">opciones</th>
                                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach ($lista_institucion as $item)
                                         <tr>
                                            <td>{{$item['mision']}}</td>
                                            <td>{{$item['vision']}}</td>
                                            <td>{{$item['himno']}}</td>
                                            <td> <a href="{{asset('/img/biblioteca/')}}{{'/'.$item['file_name'].'.'.$item['file_ext']}}" target="_blank">ver</a> </td>
                                            <td>                                        
                                                <form action="{{route('institucion.destroy',$item['id'])}}" method="POST">
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
             </div>
         </div>
     </div>
 </div>
               
               

@endsection