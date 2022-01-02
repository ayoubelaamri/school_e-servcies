@extends('layouts.app2')

@section('content')
<br></br>
<br></br>

    <br></br>
<h1>{{$fil->titre}}</h1>
 @foreach($semestre as $S)
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Semestre : {{$S->id}}</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{ url('add_module/'.$fil->id.'/'.$S->id) }}" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Ajouter Module</span></a>                     
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom du module</th>                  
                        <th>Responsable</th>
                        <th>Elements</th>
                        <th>Professeurs</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            @foreach($mod as $M)
            @if($M->semestre_id == $S->id)
                    <tr>
                        <td>{{ $M->id }}</td>
                        <td>{{ $M->name }}</td>
                        <td>{{ $M->user->name }}</td>                        
                        <td>
                            @foreach($element=$M->elements as $E)
                                {{ $E->name }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($element=$M->elements as $E)
                                {{ ($user=$E->user)->name }}<br>
                            @endforeach                  
                        </td>

                        <td>
                            <a href="{{ url('edit_module/'.$M->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <form action="{{ url('module/delete/'.$fil->id.'/'.$M->id) }}" method="post" onsubmit="return confirm('Etes-vous sur ?');">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" name="Supprimer" class="delete" value="Supprimer" />
                            </form>
                        </td>
                        
                    </tr>
                    @endif
            @endforeach
                </tbody>
            </table>
        </div>
    </div> 
    <br></br>
    <br></br>
    <br></br>
@endforeach
