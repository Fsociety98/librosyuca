@extends('layouts.welcomeLayout')
@section('content')
<div class="container-fluid">
  <h1 style="color: #444c63; font-size: 33px;" class="mt-4">
    Browser Avaliable Books
  </h1>
  <hr />
  
  <div>
    <div class="row">
      <div class="col">
        <a href="{{ url('/') }}" class="badge badge-primary">{{'Todos los libros'}}</a>
        <a href="{{ url('/reciente') }}" class="badge badge-primary">{{'Más reciente'}}</a>
        <a href="{{ url('/popular') }}" class="badge badge-primary">{{'Más popular'}}</a>
        <a href="{{ url('/gratis') }}" class="badge badge-primary">{{'Libros gratis'}}</a>
      </div>
      <div class="col col-lg-4">
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Enter Keyworks"
            aria-label="Search"
            aria-describedby="basic-addon2"
          />
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="margin-top: 30px;" class="card-deck">

    @foreach ($libros as $libro)
      <div style="border-radius: 4px" class="card">
        <img src="{{ asset('storage').'/'.$libro->imagen }}" class="card-img-top shadow" width="50" height="270" alt="...">
        <div class="card-footer">
            <h5>{{$libro->nombre}}</h5>
              <small class="text-muted">Por {{$libro->nombreAutor}}</small>
              <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>{{$libro->calificacion}}
        </div>
      </div>
    @endforeach

        <!--
        <div style="border-radius: 4px" class="card">
          <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top shadow"  alt="...">
          <div class="card-footer">
              <h5>Harry Potter</h5>
                <small class="text-muted">By Rowling</small>
                <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
          </div>
        </div>
        <div style="border-radius: 4px" class="card">
          <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top shadow" alt="...">
          <div class="card-footer">
              <h5>Harry Potter</h5>
                <small class="text-muted">By Rowling</small>
                <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
          </div>
        </div>
      -->
     
</div> 
@endsection
