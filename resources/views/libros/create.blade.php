<h1>Crear libros</h1>
<form action="{{url('/libros')}}" method="post">
{{ csrf_field() }}
    <label for="nombre">{{'Nombre del Libro'}}</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="añoPublicacion">{{'Año de la Publicación'}}</label>
    <input type="text" name="añoPublicacion" id="añoPublicacion">
    <br>

    <label for="descripcion">{{'Descripción'}}</label>
    <textarea name="descripcion" id="descripcion" rows="10" cols="50">Write something here</textarea>
    <br>

    <label for="calificacion">{{'Calificación'}}</label>
    <input type="text" name="calificacion" id="calificacion">
    <br>


    <input type="submit" value="Agregar">
</form>