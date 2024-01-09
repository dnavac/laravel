
@extends('layout.layout')

<!-- Esta vista mostrará los datos almacenados de los clientes -->
@section('content')

    <div class="container">
        <br>
        <a class="btn btn-primary" href="{{ route('client.create') }}">Nuevo cliente</a>

        <table class="table">
            <tr class="table-dark">
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
                <td>
                    <!-- Eliminar registro seleccionado-->
                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">

                        <div class="btn-group" role="group">
                        <!--Ver la información del regristro seleccionado-->
                        <a class="btn btn-outline-success btn-sm" href="{{ route('client.show', $client->id)}}">Ver</a>

                        <!--Editar la información del registro seleccionado-->
                        <a class="btn btn-outline-dark btn-sm" href="{{ route('client.edit', $client->id) }}">Editar</a>


                        <input class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                        </div>
                    </form>
                </td>
            </tr>

            @endforeach

        </table>
    </div>

@endsection
