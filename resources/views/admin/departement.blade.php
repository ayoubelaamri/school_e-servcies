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
          <h3 class="section-title">Departements</h3>
        </header>

        <br></br>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Liste des departements :</b></h2>
                    </div>
                    <div class="col-sm-3" style="margin-left: 250px;">
                        <a href="{{ url('ajouter') }}" class="btn btn-primary"><i class="material-icons">add</i> <span>Nouveau Departement</span></a>                        
                    </div>
                </div>
            </div>
<br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Chef departement</th>
                        <th>Date de création</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dep as $element)
                    <tr>
                        <td>{{ $element->titre }}</td>
                        <td>{{ $element->chef_departement }}</td>
                        <td>{{ $element->created_at }}</td>
                        <td>{{ $element->description }}</td>                        
                        
                        <td>
                            <a href="{{  url('departements-modifier-'.$element->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">settings</i></a>
                            <a href="{{ url('supprimer/'.$element->id) }}" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons" style="color: ">delete_</i></a>

                            <form action="{{ url('supprimer/'.$element->id) }}" method="post" onsubmit="return confirm('Etes-vous sur ?');" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <a href="{{  url('departement/modifier/'.$element->id) }}" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">settings</i></a>
                            <input type="submit" name="Supprimer" class="delete" value="delete" />
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