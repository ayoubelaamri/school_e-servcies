@extends('layouts.app2')

@section('content')

<br></br>
    <br></br>
    <br></br>
    <div class="container">
        <h1>Modifier les informations d'un etudiant :</h1>
        <form method='POST' action="{{ url('etudiant/update/'.$etudiant->id) }}">
            <input type="hidden" name="_method" value="PUT">

            {{ csrf_field() }}

            Nom complet: <input type="text" name="nom" class="form-control mb-2 mr-sm-2" value="{{ $etudiant->name }}" /></br>
            Email : <input type="email" name="email" class="form-control mb-2 mr-sm-2" value="{{ $etudiant->email }}" /></br>
            CNE : <input type="text" name="cin" class="form-control mb-2 mr-sm-2" value="{{ $etudiant->cin }}" /></br>
            Filiere : <select class="form-control" id="input2" name="filiere" required>
                        <option selected="selected">{{ $etudiant->filiere }}</option>
                        @foreach($fils as $f)
                        <option>{{$f}}</option>
                        @endforeach
            </select></br>
            
            <input type="submit" name="submit" value="Modifier" class="btn btn-primary"/>
        </form>
    </div>
    <br></br>
    <br></br>

@endsection