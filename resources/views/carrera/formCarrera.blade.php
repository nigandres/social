@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de carreras</div>

                <div class="panel-body">
                    <!-- <form action="/carrera" method="POST">
                        {{ csrf_field() }}
                        <label>carrera</label>
                        <input type="text" name="carrera">
                        <input type="submit" name="enviar">
                    </form> -->

                    {!! Form::open(['route' => 'carrera.store']) !!}
                        <!-- <label>carrera</label> -->
                        {!! Form::label('carrera', 'Carrera') !!}
                        <!-- <input type="text" name="carrera"> -->
                        {!! Form::text('carrera') !!}
                        <!-- <input type="submit" name="enviar"> -->
                        {!! Form::submit('aceptar') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
