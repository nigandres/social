@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">informacion de carreras</div>

                <div class="panel-body">
                    <table width="150">
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
            <form>
                <label>seleciona un programa</label>
                <select class="form-control">
                    
                        <?php 
                            for($i = 0;$i < 3;$i++)
                            {
                                echo "<option>" 
                                    echo $arrProgramas[$i];
                                echo "</option>";
                            }
                        ?>
                </select>
            </form>
        </div>
    </div>

</div>
@endsection
