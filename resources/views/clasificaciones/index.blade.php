<h1>lista de clasificaciones</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clasificaciones as $clasificacion)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$clasificacion->nombre}}</td>
            <td>
                <a href="{{ url('/clasificaciones/'.$clasificacion->clasificacionId.'/edit') }}">
                    Editar
                </a>          
             |
            <form action="{{ url('/clasificaciones/'.$clasificacion->clasificacionId) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>