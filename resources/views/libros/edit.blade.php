<div class="container-fluid">
    <h1 class="mt-4">Libros</h1>
     <form action="{{ url('/libros/'.$libro->libroId) }}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group row">

        <label for="nombre">{{'Nombre del Libro'}}</label>
        <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}">
        <br>

        <label for="anoPublicacion">{{'Año de la Publicación'}}</label>
        <input type="text" name="anoPublicacion" id="anoPublicacion" value="{{ $libro->anoPublicacion }}">
        <br>

        <label for="descripcion">{{'Descripción'}}</label>
        <textarea name="descripcion" id="descripcion" rows="10" cols="50" >{{ $libro->descripcion }}</textarea>
        <br>

        <label for="calificacion">{{'Calificación'}}</label>
        <input type="text" name="calificacion" id="calificacion" value="{{ $libro->calificacion }}">
        <br>
        <div class="form-group">
            <label for="autorId">Autores</label>
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
        <br>
        <div class="form-group">
            <label for="autorId">Generos</label>
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
        <br>
        <div class="form-group">
            <label for="autorId">Tipo</label>
            <select class="form-control" id="tipo" name="tipo">
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
        <br>
        <img src="{{ asset('storage').'/'.$libro->imagen }}" />
        <br>
        <label for="imagen">Portada</label>
        <input type="file" name="imagen" id="imagen">
        <br>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
</div>