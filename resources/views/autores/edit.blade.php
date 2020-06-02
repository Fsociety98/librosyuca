<h1>Editar autores</h1>
<form action="{{url('/autores/'.$autor->autorId) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <label for="nombre">{{'Nombre del Autor'}}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $autor->nombre}}">
    <input type="submit" value="Editar">
</form>
