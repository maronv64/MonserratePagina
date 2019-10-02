

  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">    

            <div class="col-md-3">
                @include('admin.dashboard')
            </div>
            <div class="col-md-9">
                <form action=""></form>
                <div class="card">
                    <div class="card-header">Buzon</div>
                    <div class="card-body">
                        <div class="bg-white rounded shadow-sm">
                            {{-- <h6 class="border-bottom border-gray pb-2 mb-0">más reciente</h6> --}}
                            @foreach($lista_buzon as $item)
                                {{-- <form action=""> --}}
                                    <div class="media text-muted pt-3">
                                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            <strong class="d-block text-gray-dark"> {{$item['email']}}</strong>
                                            {{$item['message']}}
                                        </p>
                                    </div>
                                {{-- </form> --}}
                            @endforeach                                             
                                    <!-- <small class="d-block text-right mt-3">
                                    <a href="#">All updates</a>
                                    </small> -->
                        </div>
                    </div>
                    {{-- <div class="card-footer">

                    </div> --}}
                </div>

            </div>
    </div>
</div>

@endsection