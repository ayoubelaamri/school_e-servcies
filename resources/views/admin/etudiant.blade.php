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

<h1 align="center">Liste des étudiants ensah</h1>

@foreach($fils as $f)
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<h3><b>Les étudiants de  : {{$f}}</b></h3>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>                        
                        <th>Email</th>
                        <th>CNE</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($users as $U)
                	@if($U->filiere == $f)
                    <tr>
                        <td>{{$U->id}}</td>
                        <td>{{$U->name}}</td>
                        <td>{{$U->email}}</td>
                        <td>{{$U->cin}}</td>                    
                        
                        <td>
                            <a href="{{ url('etudiant/modifier/'.$U->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <form action="{{ url('etudiant/supprimer/'.$U->id) }}" method="post" onsubmit="return confirm('Etes-vous sur ?');">
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
    @endforeach

<br></br>
<br></br>
<br></br>
@endsection