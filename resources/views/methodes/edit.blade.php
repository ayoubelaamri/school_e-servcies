@extends('layouts.app2')

@section('content')
<br></br>
<br></br>
<br></br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('emplois/'.$emplois->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">

				{{ csrf_field() }}
				<div class="from-group @if($errors->get('Niveau')) has-error @endif">
					<label for="">Niveau</label>
					<input type="text" name="Niveau" class="form-control" value="{{$emplois->filiere}}">
					@if($errors->get('Niveau'))
					   @foreach($errors->get('Niveau') as $message)
					     <li>{{ $message }}</li>
					    @endforeach
					@endif
				</div>
				<div class="from-group @if($errors->get('ficher')) has-error @endif">
					<label for="">Emploi</label>
					<input type="file" accept=".pdf" name="ficher" class="form-control" value="{{ old('ficher') }}">
					@if($errors->get('ficher'))
					   @foreach($errors->get('ficher') as $message)
					     <li>{{ $message }}</li>
					    @endforeach
					@endif
				</div>
				<div class="from-group">
					<input type="submit" name="" class="form-control btn btn-primary" value="Modifier">
				</div>
			</form>
		</div>
	</div>
</div>
<br></br>
<br></br>
@endsection