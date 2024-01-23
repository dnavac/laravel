@extends('layout.layout')

<!-- Esta vista mostrará los datos almacenados de los clientes -->
@section('content')

    <div class="container">

        <!-- <div class="container text-center">
            </div>
             -->
        <div class="btn-group col-4" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('client.create') }}">Nuevo cliente</a>
        </div>

        <table class="table">
            <tr class="table-dark">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo electrónico</th>
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
                        <!-- Ver la información del registro seleccionado-->
                        <a class="btn btn-outline-success btn-sm" href="{{ route('client.show', $client->id)}}">Ver</a>

                        <!-- Editar la información del registro seleccionado-->
                        <a class="btn btn-outline-dark btn-sm" href="{{ route('client.edit', $client->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                        
                        </div>
                    </form>
                </td>
            </tr>

            @endforeach

        </table>

        <div class="d-flex justify-content-center">
            {!! $clients->links() !!}
        </div>
    </div>

@endsection
