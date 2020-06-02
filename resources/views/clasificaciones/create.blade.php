<h1>Crear clasificaciones</h1>
<form action="{{url('/clasificaciones')}}" method="post">
{{ csrf_field() }}
    <label for="nombre">{{'Clasificación'}}</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Agregar">
</form>
