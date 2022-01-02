@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<div class="container">
  <h2>Modifier Actualité</h2>
<form method='POST' action='/Actualite-edit-{{$actualite->id}}'>
			{{ csrf_field() }} 
	<table>
  <tr>
    <th>Nom</th>
  </tr>
  <tr>
    <td><input type="text" name="name" class="form-control mb-2 mr-sm-2" value="{{$actualite->name}}" /></td>
  <tr><th>Texte</th></tr>
   <tr> <td> <div class="form-group">
  
  <textarea type="text" name="texte" class="form-control" rows="5" id="comment"value="{{$actualite->texte}}" ></textarea>
</div>
</tr>
  </tr>
 
</table>
			<input type="submit" name="submit" value="Valider" class="btn btn-primary"/>
	</form>
</div>
</body>
</html>
@endsection
