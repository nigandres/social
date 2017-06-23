@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">informacion de carreras</div>

                <div class="panel-body">
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>CARRERAS</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $carrera->id }}</td>
                                <td>{{ $carrera->carrera }}</td>
                                <td>
                                    <a href="{{ route('carrera.edit', $carrera->id) }}" class="btn btn-warning">editar carrera</a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['carrera.destroy', $carrera->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('eliminar', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    Que onda wey
                    <br>
                    <!-- <a href="/carrera/create" class="btn btn-success">nueva carrera</a> -->
                    <!-- <a href="{{ action('CarreraController@create') }}" class="btn btn-success">nueva carrera</a> -->
                    <!-- <a href="{{ route('carrera.show', $carrera->id) }}" class="btn btn-success">nueva carrera</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection