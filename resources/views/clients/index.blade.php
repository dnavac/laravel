
@extends('layout.layout')

<!-- Esta vista mostrará los datos almacenados de los clientes -->
@section('content')

    <div class="container">
        <br>
        <a class="btn btn-primary" href="{{ route('clients.create') }}">Nuevo cliente</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo electronico</th>
                <th>Acciones</th>
            </tr>

            @foreach ($clients as $client)

            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->firstName}}</td>
                <td>{{$client->lastName}}</td>
                <td>{{$client->email}}</td>
                <td>Ver - Editar - Eliminar</td>
            </tr>

            @endforeach

        </table>
    </div>

@endsection
