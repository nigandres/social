@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de usuarios</div>

                <div class="panel-body">
                    @if(count($users) > 0)
                        <table class="table border">
                            <thead>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>CODIGO</th>
                                <th>CARRERA</th>
                                <th>ROL</th>
                                <th>ACCESOR NOMBRE-CORREO</th>
                                <th>ACCESOR NUMERO-PROGRAMAS</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->correo }}</td>
                                    <td>{{ $user->codigo }}</td>
                                    <!-- <td>{{ $user->carrera->carrera }}</td> -->
                                    <td>{{ $user->carrera->carrera }}</td>
                                    <td>{{ $user->rol }}</td>
                                    <td>{{ $user->user }}</td>
                                    <td>{{ $user->usuario_correo }}</td>
                                    <td>{{ $user->numero_programas }}</td>
                                    <td>
                                        <a href="{{ route('usuario.show', $user->id) }}" class="btn btn-success">mostrar usuarios</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <span>no hay usuarios men</span><br>
                    @endif
                    Que onda vato
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
