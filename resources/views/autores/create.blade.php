<form method="POST" action="{{url('/autores')}}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Nombre del autor</label>
            <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="nombre" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
</form>

