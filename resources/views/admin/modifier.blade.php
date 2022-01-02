@extends('layouts.app2')

@section('content')

<br></br>
	<br></br>
	<br></br>
	<div class="container col-lg-9">

		<header class="section-header">
          <h3 class="section-title">Modifier departement : {{ $depart->titre }}</h3>
        </header>

        <br>
		
		<form method='POST' action="{{ url('update/'.$depart->id) }}">
			<input type="hidden" name="_method" value="PUT">
			{{ csrf_field() }}
			Nom du departement : <input type="text" name="titre" class="form-control mb-2 mr-sm-2" value="{{ $depart->titre }}" />
			Chef de departement : <select class="form-control" id="input2" name="chef" required>
			      		<option selected="selected">{{ $depart->chef_departement }}</option>
			      		@foreach($prof as $element)
			      			<option>{{ $element->name }}</option>
			      		@endforeach
			</select></br>
			Description : <textarea class="form-control" id="input3" placeholder="Entre la description de la departement" name="description" rows="4">{{ $depart->description }}</textarea></br>
			<input type="submit" name="submit" value="Modifier" class="btn btn-primary"/>
		</form>
	</div>
	<br></br>
	<br></br>

@endsection