

  @extends('layouts.app')

@section('content')


                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Buzón</div>

                                    <div class="card-body">
                                    <div class="my-3 p-3 bg-white rounded shadow-sm">
                                                <h6 class="border-bottom border-gray pb-2 mb-0">más reciente</h6>
                                                @foreach($lista_buzon as $item)
                                                <div class="media text-muted pt-3">
                                                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                        <strong class="d-block text-gray-dark"> {{$item['email']}}</strong>
                                                        {{$item['message']}}
                                                    </p>
                                                </div>
                                                @endforeach
                                                <!-- 
                                                <div class="media text-muted pt-3">
                                                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                    <strong class="d-block text-gray-dark">@username</strong>
                                                    deberian mejorar el rendimiento de la pagina se laggea demasiado xdxd
                                                </p>
                                                </div>
                                                <div class="media text-muted pt-3">
                                                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                                                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                    <strong class="d-block text-gray-dark">@username</strong>
                                                    hola que hace ?
                                                </p>
                                                </div> -->
                                                <small class="d-block text-right mt-3">
                                                <a href="#">All updates</a>
                                                </small>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
               

@endsection