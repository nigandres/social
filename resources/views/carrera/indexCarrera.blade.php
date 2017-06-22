@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de carreras</div>

                <div class="panel-body">
                    @if(count($carreras) > 0)
                        <table>
                            <thead>
                                <th>ID</th>
                                <th>CARRERAS</th>
                            </thead>
                            <tbody>
                                @foreach($carreras as $carrera)
                                <tr>
                                    <td>{{ $carrera->id }}</td>
                                    <td>{{ $carrera->carrera }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <span>no hay carreara men</span><br>
                    @endif
                    Que onda vato
                    <br>
                    <!-- <a href="/carrera/create" class="btn btn-success">nueva carrera</a> -->
                    <!-- <a href="{{ action('CarreraController@create') }}" class="btn btn-success">nueva carrera</a> -->
                    <a href="{{ route('carrera.create') }}" class="btn btn-success">nueva carrera</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
