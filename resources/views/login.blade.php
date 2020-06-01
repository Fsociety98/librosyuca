@@extends('layouts.app')

@@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-defoult">
                <h1 class="panel-title">
                    Acceso a la aplicación
                </h1>
                <div class="panel-body">
                    <form action="">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input class="form-control"
                             type="email" 
                             name="email" 
                             placeholder="Ingresa tu email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control"
                             type="email" 
                             name="email" 
                             placeholder="Ingresa tu contraseña">
                        </div>
                        <button class="btn btn-primary btn-block">
                            Acceder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection