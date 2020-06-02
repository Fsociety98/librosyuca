@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Clasificaciones</h1>
    @include('clasificaciones.create');
    <table class="table">
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
                        <a class="btn btn-warning" href="{{ url('/clasificaciones/'.$clasificacion->clasificacionId.'/edit') }}">
                            Editar
                        </a>          
                    </td>
                    <td>
                        <form action="{{ url('/clasificaciones/'.$clasificacion->clasificacionId) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
</div>
@endsection
