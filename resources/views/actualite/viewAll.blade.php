
@extends('layouts.app2')

@section('content')

    <br></br>

  <!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br></br>
        <br></br>  

        <header class="section-header">
          <h3 class="section-title">Actualites</h3>
        </header>

        <br></br>
  <div class="container"> 
    <tr></tr>

    <div class="col-sm-3">

            <a style="margin-right: 200px;" href="/actualites-add" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Ajouter Actualité</span></a>  

            
       <br></br>

          </div>
          
@foreach($actualite as $A)
        <table class="table table-striped table-hover">

                    <tr>
                     
                        <td><img src="/img/sci.png" width="60" height="60"></td>
                         <td><span class="glyphicon glyphicon-calendar"></span>{{$A->created_at}}</td>
                        <td><a href="/actualites-info-{{$A->id}}">{{$A->name}}</a></td>
                        <td><div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <div class="navbar-nav mr-auto">
                        <div class="nav-item">
                         <td> <a style="margin-right: 50px; margin-top: 10px;" href="/actualites-info-{{$A->id}}" class="btn btn-light" role="button">Afficher plus de détails</a></td>
                        </div>
                    </div>
            </div></td>                      
            <td>
            <div class="row">
              <a href="/actualite-edit-{{$A->id}}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">settings</i></a>
              <a href="/actualite-delete-{{$A->id}}" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons">delete</i></a>
            </div>
            </td>
                    </tr>
          </table>
@endforeach       


    </tbody>
  </table>
</div>
  

      <br></br>
      
@endsection