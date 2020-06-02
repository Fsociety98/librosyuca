@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Autores</h1>
     <form action="{{ url('/autores/'.$autor->autorId) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Nombre del autor</label>
        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="nombre" value="{{ $autor->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
</div>
@endsection
