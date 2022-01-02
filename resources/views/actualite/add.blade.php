@extends('layouts.app2')

@section('content')
<br></br>  
<br></br>  


 <div class="container">

   <br></br>  

        <header class="section-header">
          <h3 class="section-title">Ajouter Actualite</h3>
        </header>

        <br></br>

<form method='POST' class="col-md-9" style="margin-left: 130px;">
			{{ csrf_field() }} 

    <th>Titre :</th>

    <td><input type="text" name="name" class="form-control mb-2 mr-sm-2" /></td></tr>

    <th>Contenu :</th>
 <div class="form-group">
  
  <textarea type="text" name="texte" class="form-control" rows="5" id="comment"></textarea>
</div>

 
			<input type="submit" name="submit" value="Valider" class="btn btn-primary"/ style="position: center;">
</form>
</div>


<br></br>  
<br></br>  
@endsection
