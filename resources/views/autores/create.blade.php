<h1>Crear autores</h1>
<form action="{{url('/autores')}}" method="post">
{{ csrf_field() }}
    <label for="nombre">{{'Nombre del Autor'}}</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Agregar">
</form>
