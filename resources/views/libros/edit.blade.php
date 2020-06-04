@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="col-md-12 col-xs-6 col-sm-4">
        <h1 class="mt-4">Nuevo libro</h1>
        <hr>
        <form action="{{ url('/libros/'.$libro->libroId) }}" method="POST"
            enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">{{ 'Nombre del Libro' }}</label>
                            <input type="text" name="nombre" class="form-control" id="inputEmail4"
                                value="{{ $libro->nombre }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label
                                for="inputPassword4">{{ 'Año de la Publicación' }}</label>
                            <input type="number" name="anoPublicacion" value="{{ $libro->anoPublicacion }}"
                                class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">{{ 'Descripción' }}</label>
                        <textarea type="text" class="form-control" name="descripcion" id="descripcion" rows="10"
                            cols="50">{{ $libro->descripcion }}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputCity">Generos</label>
                            <select class="form-control" id="clasificacionId" name="clasificacionId">
                                @foreach ($clasificacionesList as $clasificacion)
                                    <option value="{{$clasificacion->clasificacionId}}" 

                                        @if($clasificacion->clasificacionId == $libro->clasificacionId)
                                        {{"selected"}}
                                        @endif

                                        >{{$clasificacion->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Autores</label>

                            <select class="form-control" id="autorId" name="autorId">
                                @foreach ($autoresList as $autor)
                                <option value="{{$autor->autorId}}"
                
                                    @if($autor->autorId == $libro->autorId)
                                    {{"selected"}}
                                    @endif
                
                                >{{$autor->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">Estrellas <i style="color: rgb(255, 208, 0);"
                                    class="fas fa-star"></i></label>
                            <select id="glsr-ltr" name="calificacion" class="form-control">
                                <option value="">Select a rating</option>
                                @if($libro->calificacion == 5)
                                    <option value="5" {{ "selected" }}>Fantástico</option>
                                @else
                                    <option value="5">Fantástico</option>
                                @endif

                                @if($libro->calificacion == 4)
                                    <option value="4" {{ "selected" }}>Excelente</option>
                                @else
                                    <option value="4">Excelente</option>
                                @endif

                                @if($libro->calificacion == 3)
                                    <option value="3" {{ "selected" }}>Bueno</option>
                                @else
                                    <option value="3">Bueno</option>
                                @endif

                                @if($libro->calificacion == 2)
                                    <option value="2" {{ "selected" }}> Malo</option>
                                @else
                                    <option value="2">Malo</option>
                                @endif

                                @if($libro->calificacion == 1)
                                    <option value="1" {{ "selected" }}>Terrible</option>
                                @else
                                    <option value="1" >Terrible</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputZip">Tipo</label>
                            <select name="tipo" class="form-control">
                                <option value="{{'gratis'}}" 
                                    @if($libro->tipo == "gratis")
                                    {{"selected"}}
                                    @endif
                                >{{'Gratis'}}</option>
                                <option value="{{'paga'}}" 
                                    @if($libro->tipo == "paga")
                                    {{"selected"}}
                                    @endif
                            >{{'De Paga'}}</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">MODIFICAR</button>
                </div>
                <div class="col-md-4" style="padding-left: 8%;
            padding-right: 8%;
            padding-bottom: 8%;">
                    <h4>Portada</h4>
                    <input type="file" class="datepicker" data-date-format="yyyy" name="imagen" id="imagen" value="{{$libro->imagen }}">
                    <div style="border-radius: 4px; margin-top:5px" class="card shadow">
                        <img src="{{ asset('storage').'/'.$libro->imagen }}"
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


</div>
@endsection




{{-- <div class="container-fluid">
    <h1 class="mt-4">Libros</h1>
     <form action="{{ url('/libros/'.$libro->libroId) }}" method="POST"
enctype='multipart/form-data'>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<div class="form-group row">

    <label for="nombre">{{ 'Nombre del Libro' }}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}">
    <br>

    <label for="anoPublicacion">{{ 'Año de la Publicación' }}</label>
    <input type="text" name="anoPublicacion" id="anoPublicacion" value="{{ $libro->anoPublicacion }}">
    <br>

    <label for="descripcion">{{ 'Descripción' }}</label>
    <textarea name="descripcion" id="descripcion" rows="10" cols="50">{{ $libro->descripcion }}</textarea>
    <br>

    <label for="calificacion">{{ 'Calificación' }}</label>
    <input type="text" name="calificacion" id="calificacion" value="{{ $libro->calificacion }}">
    <br>
    <div class="form-group">
        <label for="autorId">Autores</label>
        <select class="form-control" id="autorId" name="autorId">
            @foreach($autoresList as $autor)
                <option value="{{ $autor->autorId }}" <blade
                    if|(%24autor-%3EautorId%20%3D%3D%20%24libro-%3EautorId)%0D>
                    {{ "selected" }}
            @endif

            >{{ $autor->nombre }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="autorId">Generos</label>
        <select class="form-control" id="clasificacionId" name="clasificacionId">
            @foreach($clasificacionesList as $clasificacion)
                <option value="{{ $clasificacion->clasificacionId }}" <blade
                    if|(%24clasificacion-%3EclasificacionId%20%3D%3D%20%24libro-%3EclasificacionId)%0D>
                    {{ "selected" }}
            @endif

            >{{ $clasificacion->nombre }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="autorId">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="{{ 'gratis' }}" <blade
                if|(%24libro-%3Etipo%20%3D%3D%20%26%2334%3Bgratis%26%2334%3B)%0D>
                {{ "selected" }}
                @endif
                >{{ 'Gratis' }}</option>
            <option value="{{ 'paga' }}" <blade
                if|(%24libro-%3Etipo%20%3D%3D%20%26%2334%3Bpaga%26%2334%3B)%0D>
                {{ "selected" }}
                @endif
                >{{ 'De Paga' }}</option>
        </select>
    </div>
    <br>
    <img src="{{ asset('storage').'/'.$libro->imagen }}" />
    <br>
    <label for="imagen">Portada</label>
    <input type="file" name="imagen" id="imagen">
    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
</div>
</form>
</div> --}}
