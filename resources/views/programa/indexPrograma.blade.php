@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de carreras</div>

                <div class="panel-body">
                    @if(count($programas) > 0)
                        <table>
                            <thead>
                                <th>ID</th>
                                <th>PROGRAMAS</th>
                                <th>HORARIO</th>
                            </thead>
                            <tbody>
                                @foreach($programas as $programa)
                                <tr>
                                    <td>{{ $programa->id }}</td>
                                    <td>{{ $programa->nombre }}</td>
                                    <td>{{ $programa->horario }}</td>
                                    <tr>
                                        <ul>
                                            <td colspan="3">
                                                @foreach($programa->users as $user)
                                                    <li>{{ $user->nombre }} -- {{ $user->rol }}</li>
                                                @endforeach
                                            </td>
                                        </ul>
                                    </tr>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <span>no hay carreara men</span><br>
                    @endif
                    Que onda vato
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
