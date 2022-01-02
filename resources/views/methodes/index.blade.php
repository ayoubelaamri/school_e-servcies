@extends('layouts.app2')

@section('content')
<br></br>
<br></br>
<br></br>


<div class="container">

		<div>

			@if(session()->has('success'))
			<div class="alert alert-success">
				{{ session()->get('success')}}
			</div>
			@endif
		<br>

        <header class="section-header">
          <h3 class="section-title">Emplois du temps</h3>
        </header>

        <br></br>
        <div class="col-lg-9" style="margin-left: 170px;">
        	<div class="row">
                    <div class="col-sm-6">
                        <h2><b>Liste des emplois :</b></h2>
                    </div>
                    <div class="col-sm-3" style="margin-left: 115px;">
                        <a href="{{url('emplois-creat')}}" class="btn btn-primary"><i class="material-icons">add</i> <span>Ajouter Emplois</span></a>                        
                    </div>
                </div>
			<br></br>
			<table class="table">
				<head>
					<tr>
						<th>Niveau</th>
						<th>Dernière mise à jour</th>
						<th>Actions</th>
					</tr>
				</head>
				<body>
					@foreach($emplois as $emploi)
					<tr>
						<td>
							<a href="{{$emploi->les_fichers}}" download>{{$emploi->filiere}}</a>
						</td>
						<td>{{$emploi->updated_at}}</td>
						<td>
						

                            <form action="{{url('emplois-'.$emploi->id)}}" method="POST">

								{{ csrf_field() }}
								{{ method_field('DELETE') }}
							  <a href="{{url('emplois-'.$emploi->id.'-edit')}}" class="btn btn-primary">Modifier</a>
							<button href="submit" class="btn btn-danger">Supprimer</button>
						    </form>
							
						</td>
					</tr>
					@endforeach
				</body>
			</table>
		</div>

</div>
<br></br>
<br></br>
@endsection