@extends('layouts.app')
@section('lesemploi')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>La liste des Emplois</h1>
			<h3>Ces emplois du temps sont accessibles sur la plateforme </h3>
			<div class="pull-right">
				<a href="{{url('')}}" class="btn btn-primary">connexion</a>
			</div>
			<table class="table">
				<head>
					<tr>
						<th>Niveau</th>
						<th>Dernière mise à jour</th>
					</tr>
				</head>
				<body>
					<tr>
						<td>Première Année Cycle Préparatoire</td>
						<td>12/12/2019 à 13:50</td>
					</tr>
				</body>
			</table>
		</div>
	</div>
</div>
@endsection