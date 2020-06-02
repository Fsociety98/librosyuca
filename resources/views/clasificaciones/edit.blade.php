<h1>Editar clasificacion</h1>
<form action="{{url('/clasificaciones/'.$clasificacion->clasificacionId) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <label for="nombre">{{'Clasificación'}}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $clasificacion->nombre}}">
    <input type="submit" value="Editar">
</form>
