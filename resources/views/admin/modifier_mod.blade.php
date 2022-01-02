@extends('layouts.app2')

@section('content')
	<br></br>
	<br></br>
	<br></br>
	<div class="container">
		<h1>Modifier le module :</h1>
		<form method='POST' action="{{ url('edit/'.$mod->id) }}">
			<input type="hidden" name="_method" value="PUT">
			{{ csrf_field() }}
			Nom du module : <input type="text" name="name" class="form-control mb-2 mr-sm-2" value="{{$mod->name}}" />
			Responsable id: <input type="text" name="responsable" class="form-control mb-2 mr-sm-2" value="{{$mod->user_id}}" /></br>
			<input type="submit" name="submit" value="Modifier" class="btn btn-success"/>
		</form>
	</div>
	<br></br>
	<br></br>
@endsection