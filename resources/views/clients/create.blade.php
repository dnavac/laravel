@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                
                <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">
                    @csrf
                    <div>
                        <label for="">Nombre: </label>
                        <input class="form-control" placeholder="Nombre" type="text" name="firstName" id="">
                    </div>
                    <div>
                        <label for="">Apellido: </label>
                        <input class="form-control" placeholder="Apellido" type="text" name="lastName" id="">
                    </div>
                    <div>
                        <label for="">Correo electrónico: </label>
                        <input class="form-control" placeholder="Correo electrónico" type="text" name="email" id="">
                    </div>
                    <br>
                    <div>
                        <input class="btn btn-secondary" type="reset" value="Restablecer">
                        <input class="btn btn-info" type="submit" value="Aceptar">
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection