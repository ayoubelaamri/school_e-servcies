<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts.js"></script>
<link rel="stylesheet" href="styles.css">
@extends('layouts.app2')

@section('content')
<br></br>
<br></br>
<br></br>
	<div>
	<label>Choisir une filiere</label>
	</br>
	@foreach($fil as $element)
		<a href="{{ url('module-'.$element->id) }}" class="sems p-3 mb-2 bg-info text-white"><i class="fas fa-vector-square">{{ $element-> titre}}</i></a>
		<br>
	@endforeach
	</div>
	<br></br>
	<br></br>
	<br></br>
@endsection

<style type="text/css">
	.sems{
		cursor: pointer;
		width: 16rem;
		color: white !important;
		margin-right: .5rem;
		margin-left: .5rem;
		margin-top: .4rem;
		padding: 1rem;
		display: inline-block;
		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4), 0 4px 10px 0 rgba(0, 0, 0, 0.20);
		border-radius: .1rem;
	}
</style>