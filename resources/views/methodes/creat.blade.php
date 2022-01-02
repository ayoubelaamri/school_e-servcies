@extends('layouts.app2')

@section('content')
<br></br>
<br></br>
<br></br>
<div class="container">

	<header class="section-header">
          <h3 class="section-title">Ajouter un emplois</h3>
        </header>

        <br></br>

		<form action="{{url('emplois')}}" method="POST" style="margin-left: 210px;">

		<div class="col-md-9">
			

				{{ csrf_field() }}
				<div class="from-group @if($errors->get('Niveau')) has-error @endif">
					<label for="">Niveau</label>
					<input type="text" name="Niveau" class="form-control" value="{{ old('Niveau') }}">
					@if($errors->get('Niveau'))
					   @foreach($errors->get('Niveau') as $message)
					     <li>{{ $message }}</li>
					    @endforeach
					@endif
				</div>
				<br>
				<div class="from-group @if($errors->get('ficher')) has-error @endif">
                	<label >Emploi :</label>
                	<input type="file" accept=".pdf" name="ficher" class="form-control" value="{{ old('ficher') }}">
                	@if($errors->get('ficher'))
                	@foreach($errors->get('ficher') as $message)
                	<li>{{ $message }}</li>
                	@endforeach
                	@endif
                </div>
                <br>
		</div>
		<div class="col-sm-3">
			<input type="submit" name="" class="form-control btn btn-success" value="Enregistrer">
		</div>
					
		
		</form>


</div>
<br></br>
<br></br>
@endsection