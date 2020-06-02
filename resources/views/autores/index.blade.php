<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($autores as $autor)
        <tr>
            <!-- <img src="{{ asset('storage').'/'.$autor->foto}}" />-->
            <td>{{$loop->iteration}}</td>
            <td>{{$autor->nombre}}</td>
            <td>
                <a href="{{ url('/autores/'.$autor->autorId.'/edit') }}">
                    Editar
                </a>          
             |
            <form action="{{ url('/autores/'.$autor->autorId) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>