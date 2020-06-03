@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="col-md-12 col-xs-6 col-sm-4">
        <h1 class="mt-4">Nuevo libro</h1>
        <hr>
        <form action="{{url('/libros') }}" method="POST"
        enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">{{ 'Nombre del Libro' }}</label>
                        <input type="text" name="nombre" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label
                            for="inputPassword4">{{ 'Año de la Publicación' }}</label>
                        <input type="number"  name="anoPublicacion"  class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">{{ 'Descripción' }}</label>
                    <textarea type="text" class="form-control" name="descripcion" id="descripcion" rows="10"
                        cols="50"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputCity">Generos</label>
                        <select class="form-control" id="clasificacionId" name="clasificacionId">
                            @foreach($clasificacionesList as $clasificacion)
                                <option value="{{ $clasificacion->clasificacionId }}">{{ $clasificacion->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Autores</label>

                        <select class="form-control" id="autorId" name="autorId">
                            @foreach($autoresList as $autor)
                                <option value="{{ $autor->autorId }}">{{ $autor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Estrellas <i style="color: rgb(255, 208, 0);"
                                class="fas fa-star"></i></label>
                        <select id="glsr-ltr" name="calificacion" class="form-control">
                            <option value="">Select a rating</option>
                            <option value="5">Fantástico</option>
                            <option value="4">Excelente</option>
                            <option value="3">Bueno</option>
                            <option value="2">Malo</option>
                            <option value="1">Terrible</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Tipo</label>
                        <select name="tipo" class="form-control">
                            <option value="{{ 'gratis' }}">{{ 'Gratis' }}</option>
                            <option value="{{ 'paga' }}">{{ 'De Paga' }}</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">AGREGAR</button>
            </div>
            <div class="col-md-4" style="padding-left: 8%;
            padding-right: 8%;
            padding-bottom: 8%;">
            <h4>Portada</h4>
            <input type="file" class="datepicker" data-date-format="yyyy" name="imagen" id="imagen" value="" >
              <div style="border-radius: 4px; margin-top:5px" class="card shadow">
                <img src="{{ URL::to('/') }}/assets/img/ejemplo1.svg" style="    padding-top: 45%;
                padding-bottom: 45%;
                padding-left: 10%;
                padding-right: 10%;"
                    class="card-img-top img-fluid rounded" width="50" height="270" alt="...">
                <div class="card-footer">
                    <h5>Nombre del libro</h5>
                    <small class="text-muted">Por Autor</small>
                    <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>0
                </div>
            </div>
            </div>
          </div>
        </form>
        
</div>
        
        {{-- <form action="{{url('/libros') }}" method="POST"
        enctype='multipart/form-data'>
        {{ csrf_field() }}
        <label for="nombre">{{ 'Nombre del Libro' }}</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="anoPublicacion">{{ 'Año de la Publicación' }}</label>
        <input type="text" name="anoPublicacion" id="anoPublicacion">
        <br>

        <label for="descripcion">{{ 'Descripción' }}</label>
        <textarea name="descripcion" id="descripcion" rows="10" cols="50"></textarea>
        <br>

        <label for="calificacion">{{ 'Calificación' }}</label>
        <input type="text" name="calificacion" id="calificacion">
        <br>
        <div class="form-group">
            <label for="autorId">Autores</label>
            <select class="form-control" id="autorId" name="autorId">
                @foreach($autoresList as $autor)
                    <option value="{{ $autor->autorId }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="autorId">Generos</label>
            <select class="form-control" id="clasificacionId" name="clasificacionId">
                @foreach($clasificacionesList as $clasificacion)
                    <option value="{{ $clasificacion->clasificacionId }}">{{ $clasificacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="autorId">Tipo</label>
            <select class="form-control" id="tipo" name="tipo">
                <option value="{{ 'gratis' }}">{{ 'Gratis' }}</option>
                <option value="{{ 'paga' }}">{{ 'De Paga' }}</option>
            </select>
        </div>
        <br>
        <label for="imagen">Portada</label>
        <input type="file" name="imagen" id="imagen" value="">
        <br>
        <input type="submit" value="Agregar">
        </form> --}}
    </div>
    @endsection
