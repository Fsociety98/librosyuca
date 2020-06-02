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
        <a href="#" class="badge badge-primary">All Books</a>
        <a href="#" class="badge badge-primary">Most Recent</a>
        <a href="#" class="badge badge-primary">Most Popular</a>
        <a href="#" class="badge badge-primary">Free Books</a>
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
      <div style="border-radius: 4px" class="card">
        <img   src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top shadow" alt="...">
        <div class="card-footer">
            <h5>Harry Potter</h5>
              <small class="text-muted">By Rowling</small>
              <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
        </div>
      </div>
      <div style="border-radius: 4px" class="card ">
          <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top shadow" alt="...">
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
     
</div> 
@endsection
