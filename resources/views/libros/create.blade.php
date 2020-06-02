<h1>Crear libros</h1>
<form action="{{url('/libros')}}" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
    <label for="nombre">{{'Nombre del Libro'}}</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="anoPublicacion">{{'Año de la Publicación'}}</label>
    <input type="text" name="anoPublicacion" id="anoPublicacion">
    <br>

    <label for="descripcion">{{'Descripción'}}</label>
    <textarea name="descripcion" id="descripcion" rows="10" cols="50"></textarea>
    <br>

    <label for="calificacion">{{'Calificación'}}</label>
    <input type="text" name="calificacion" id="calificacion">
    <br>
    <div class="form-group">
        <label for="autorId">Autores</label>
        <select class="form-control" id="autorId" name="autorId">
        @foreach ($autoresList as $autor)
            <option value="{{$autor->autorId}}" >{{$autor->nombre}}</option>
        @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="autorId">Generos</label>
        <select class="form-control" id="clasificacionId" name="clasificacionId">
        @foreach ($clasificacionesList as $clasificacion)
            <option value="{{$clasificacion->clasificacionId}}" >{{$clasificacion->nombre}}</option>
        @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="autorId">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="{{'gratis'}}" >{{'Gratis'}}</option>
            <option value="{{'paga'}}" >{{'De Paga'}}</option>
        </select>
    </div>
    <br>
    <label for="imagen">Portada</label>
    <input type="file" name="imagen" id="imagen" value="">
    <br>
    <input type="submit" value="Agregar">
</form>