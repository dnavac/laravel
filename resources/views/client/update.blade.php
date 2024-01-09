@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="">Nombre: </label>
                        <input class="form-control" value="{{ $client->firstName }}" type="text" name="firstName" id="">
                    </div>
                    <div>
                        <label for="">Apellido: </label>
                        <input class="form-control" value="{{ $client->lastName }}" type="text" name="lastName" id="">
                    </div>
                    <div>
                        <label for="">Correo electrónico: </label>
                        <input class="form-control" value="{{ $client->email }}" type="text" name="email" id="">
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