@extends('layouts.app2')

@section('content')
<br></br>
<br></br>
<br></br>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>

    @endif
    @if(session()->has('success2'))
    <div class="alert alert-success">
        {{session()->get('success2')}}
    </div>

    @endif
    @if(session()->has('success3'))
    <div class="alert alert-success">
        {{session()->get('success3')}}
    </div>
    @endif

<div class="container">

    <br> 

        <header class="section-header">
          <h3 class="section-title">Professeurs</h3>
        </header>

        <br></br>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Liste des professeurs :</b></h2>
                    </div>
                    <div class="col-sm-3" style="margin-left: 250px;">
                        <a href="{{ url('ajouter') }}" class="btn btn-primary"><i class="material-icons">add</i> <span>Nouveau Prof</span></a>                        
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>                        
                        <th>Email</th>
                        <th>Rolle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($prof as $U)
                    <tr>
                        <td>{{$U->id}}</td>
                        <td>{{$U->name}}</td>
                        <td>{{$U->email}}</td>                        
                        <td>
                            @if($U->rolle == 'D')
                                Chef de Departement
                                @endif
                                @if($U->rolle == 'F')
                                Chef de Filière
                                @endif
                                @if($U->rolle == 'R')
                                Responsable Module
                                @endif
                                @if($U->rolle == 'P')
                                Responsable Element
                                @endif
                                @if($U->rolle == 'NULL')
                                Etudiants
                                @endif
                        </td>
                        <td>
                            <a href="{{ url('prof/modifier/'.$U->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <form action="{{ url('prof/supprimer/'.$U->id) }}" method="post" onsubmit="return confirm('Etes-vous sur ?');">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" name="Supprimer" class="delete" value="Supprimer" />
                            </form>
                        </td>
                    </tr>
            @endforeach
                </tbody>
            </table>
        </div>
    </div> 

<br></br>
<br></br>
<br></br>

@endsection