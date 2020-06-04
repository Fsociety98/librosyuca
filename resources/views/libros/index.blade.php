@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-6 col-sm-4">
            <h1 class="mt-4">Libros</h1>
            <hr>
            <div>
                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col col-lg-4">
                        <div class="input-group">
                            
                            <div class="input-group-append">
                                <a type="button" style="    position: relative;
                                left: 375%;" href="{{ url('/libros/create') }}" class="btn btn-outline-info">NUEVO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="card-deck">
                <div class="col-md-12">
                    <div class="row row-cols-5 row-cols-md-5">
                        @foreach($libros as $libro)
                            <div class="col mb-4">
                                <div style="border-radius: 4px" class="card shadow">
                                    <img src="{{ asset('storage').'/'.$libro->imagen }}"
                                        class="card-img-top img-fluid rounded" width="50" height="270" alt="...">
                                    <div class="card-footer">
                                        <h5>{{ $libro->nombre }}</h5>
                                        <small class="text-muted">Por {{ $libro->nombreAutor }}</small>
                                        <i style="color: rgb(255, 208, 0);"
                                            class="fas fa-star"></i>{{ $libro->calificacion }}
                                        <form action="{{ url('/libros/'.$libro->libroId) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="btn-group shadow-sm" role="group" aria-label="Basic example">
                                                <a class="btn btn-outline-info"
                                                    href="{{ url('/libros/'.$libro->libroId.'/edit') }}">
                                                    Editar
                                                </a>
                                                <button class="btn btn-outline-info" type="submit"
                                                    onclick="return confirm('¿Borrar?');">Borrar</button>
                                            </div>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
