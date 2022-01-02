@extends('layouts.app2')

@section('content')

<br></br>
    <br></br>
    <br></br>
    <div class="container">
        <h1>Modifier les informations d'un prof :</h1>
        <form method='POST' action="{{ url('prof/update/'.$prof->id) }}">
            <input type="hidden" name="_method" value="PUT">

            {{ csrf_field() }}

            Nom complet: <input type="text" name="nom" class="form-control mb-2 mr-sm-2" value="{{ $prof->name }}" /></br>
            Email : <input type="email" name="email" class="form-control mb-2 mr-sm-2" value="{{ $prof->email }}" /></br>
            Role : <select class="form-control" id="input2" name="rolle" required>
                        <option selected="selected">{{ $prof->rolle }}</option>
                        <option>D</option>
                        <option>F</option>
                        <option>R</option>
                        <option>P</option>
            </select></br>
            <input type="submit" name="submit" value="Modifier" class="btn btn-primary"/>
        </form>
    </div>
    <br></br>
    <br></br>

@endsection