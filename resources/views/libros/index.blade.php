<div class="container-fluid">
    <h1 class="mt-4">libros</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $libro->nombre }}</td>
                    <td>
                         <img src="{{ asset('storage').'/'.$libro->imagen }}" />
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ url('/libros/'.$libro->libroId.'/edit') }}">
                            Editar
                        </a>          
                    </td>
                    <td>
                        <form action="{{ url('/libros/'.$libro->libroId) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                        </form>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
</div>