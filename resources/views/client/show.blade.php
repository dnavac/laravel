@extends('layout.layout')


@section('content')

    <br>
    <center><div class="container">
        <div class="row"></div>
        <div class="row">
            <!--Mostrar un CARD para la información individual del cliente-->
            <div class="card">
                <div class="card-header">
                    Información del cliente
                </div>
                <div class="card-body">
                    <h5 class="card-tittle">Nombre: {{ $client->firstName }}  {{ $client->lastName }}</h5>
                        <p class="card-text"> Correo electronico: {{ $client->email }}</p>
                        <a href="{{ route('client.index') }}" class="btn btn-primary"> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row"></div>
    </div></center>

    <br>
@endsection