@extends('layouts.app2')

@section('content')
	<br></br>
	<br></br>
	<br></br>
	<div class="container">
		<h1>Ajouter un nouveau module :</h1>
		<form method='POST' action="{{url('save_module/'.$id_fil.'/'.$id_sem)}}">
			{{ csrf_field() }} 
			Nom du module : <input type="text" name="name" class="form-control mb-2 mr-sm-2" />
			Responsable id : <input type="text" name="responsable" class="form-control mb-2 mr-sm-2" /></br>
			<input type="submit" name="submit" value="Ajouter" class="btn btn-primary"/>
		</form>
	</div>
	<br></br>
	<br></br>
@endsection
