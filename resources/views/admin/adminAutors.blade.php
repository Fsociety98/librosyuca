@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Autores</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($autores as $autor)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $autor->nombre }}/td>
                    <td>
                        <!-- <img src="{{ asset('storage').'/'.$autor->foto }}" />-->
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ url('/autores/'.$autor->autorId.'/edit') }}">
                            Editar
                        </a>          
                     |
                    <form action="{{ url('/autores/'.$autor->autorId) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                    </td>
                <tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
