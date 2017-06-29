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
                            <th>codigo</th>
                            <th>nombre</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->codigo }}</td>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->correo }}</td>
                                <td>{{ $user->rol }}</td>
                                <td>{{ $user->carrera->carrera }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    Programa: {{ ($user->programas()->first() !== null) ? $user->programas()->first()->nombre : 'Te la pelas' }} 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    Que onda wey
                </div>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['action' => 'AdminUsuarioController@asociarPrograma']) !!}
            {!! Form::label('programa_id', 'Seleccioea',['class' => '']) !!}
            {!! Form::select('programa_id',$programas,null,['class' => 'form-control']) !!}
            {!! Form::hidden('user_id',$user->id) !!}
            {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

</div>
@endsection
