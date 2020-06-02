@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Editar clasificacion</h1>
     <form action="{{ url('/clasificaciones/'.$clasificacion->clasificacionId) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Clasificación</label>
        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="nombre" value="{{ $clasificacion->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
</div>
@endsection
