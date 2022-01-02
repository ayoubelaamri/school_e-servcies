@extends('layouts.app2')

@section('content')

    <br></br>
    <br></br>
    <br></br>
    <div class="container">
        <h1>Ajouter un prof :</h1>
        <form method='POST' action="{{ url('save_prof') }}">

            {{ csrf_field() }}

            Nom complet : <input type="text" name="nom" class="form-control mb-2 mr-sm-2" /></br>
            Email : <input type="email" name="email" class="form-control mb-2 mr-sm-2" /></br>
            Role : <select class="form-control" id="input2" name="rolle" required>
                        <option selected hidden>choisir le role du prof</option>
                        <option>D</option>
                        <option>F</option>
                        <option>R</option>
                        <option>P</option>
            </select></br>
            <input type="submit" name="submit" value="Ajouter" class="btn btn-primary"/>
        </form>
    </div>
    <br></br>
    <br></br>

@endsection