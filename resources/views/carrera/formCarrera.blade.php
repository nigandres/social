@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
                <div class="panel-heading">Listado de carreras</div>

                <div class="panel-body">
                    <!-- <form action="/carrera" method="POST">
                        {{ csrf_field() }}
                        <label>carrera</label>
                        <input type="text" name="carrera">
                        <input type="submit" name="enviar">
                    </form> -->
                    @if(isset($carrera))
                        {!! Form::model($carrera, ['route' => ['carrera.update',$carrera->id], 'method' => 'patch']) !!}
                    @else
                        {!! Form::open(['route' => 'carrera.store']) !!}
                    @endif
                        <!-- <label>carrera</label> -->
                        {!! Form::label('carrera', 'Carrera') !!}
                        <!-- <input type="text" name="carrera"> -->
                        {!! Form::text('carrera', null) !!}
                        <!-- <input type="submit" name="enviar"> -->
                        {!! Form::submit('aceptar') !!}
                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
