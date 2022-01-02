@extends('layouts.app2')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>

    @endif
    @if(session()->has('success2'))
    <div class="alert alert-success">
        {{session()->get('success2')}}
    </div>

    @endif
    @if(session()->has('success3'))
    <div class="alert alert-success">
        {{session()->get('success3')}}
    </div>
    @endif

<section id="portfolio"  class="section-bg" >
      <div class="container">

        <br></br>
        <br></br>  

        <header class="section-header">
          <h3 class="section-title">Filieres</h3>
        </header>

        <br></br>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Liste des filieres :</b></h2>
                    </div>
                    <div class="col-sm-3" style="margin-left: 250px;">
                        <a href="{{ url('ajouter') }}" class="btn btn-primary"><i class="material-icons">add</i> <span>Nouvelle filiere</span></a>                        
                    </div>
                </div>
            </div>
<br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Chef Filiere</th>
                        <th>Departement</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($fil as $element)
                    <tr>
                        <td>{{ $element->titre }}</td>
                        <td>{{ $element->description }}</td> 
                        <td>{{ $element->chef_filiere }}</td>
                        <td>{{ $element->departement }}</td>
                        <td>{{ $element->created_at }}</td>
                                               
                        
                        <td>
                            <form action="{{ url('supprimer_fil/'.$element->id) }}" method="post" onsubmit="return confirm('Etes-vous sur ?');" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <a href="{{ url('filiere/modifier/'.$element->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <input type="submit" name="Supprimer" class="delete" value="Supprimer" />
                            <!--<a href="#" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>-->
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <br></br>

      </div>
    </section>

@endsection