@extends('layouts.app2')
 @section('content')

<div class="card border-secondary mb-3" style="margin-top:7em;max-width: 80%;">
  <div class="card-header" style="font-size: 20px;color: #26968F;">Staff administratif de l'établissement</div>
  <div class="card-body">
    <!--<h4 class="card-title">Secondary card title</h4>-->
    <p class="card-text">Pour mener à bien ses missions et assurer le fonctionnement de l'établissement, l'administration l’ENSAH s’articule autour de plusieurs services administratifs et techniques chapotés par la direction. L'organisation décrite dans cette page vous permet de mieux comprendre l’organisation de l’ENSAH ainsi que la découverte des différentes unités qui structurent notre établissement.</p>
  </div>
  <hr class="my-2">
  <div style="margin-left: 10rem" class="container">  
    <div   class="row">
      <div class="col-md-12">
        <h5 class="card-title"> <strong> Services administratifs et techniques: </strong></h5>
        <ul>
          
          @foreach($services as $serv)
          
         <li> <b> {{ $serv->nom }} : </b> 
          @foreach($serv->responsables as $perso)
            {{ $perso->nom }} {{ $perso->prenom }},         
          @endforeach 
          @endforeach
        </li>
        </ul>
      </div>
      
    </div>
  </div> 
</div>
<div class="card border-light mb-3" style="max-width: 40rem;">
  <div class="card-header">Direction</div>
  <div class="card-body">
    <div class="row">
       @foreach($directions as $perso)
            @if($perso->rolle == "DR")
            <div class="col-md-4">
          <p><b> Le Directeur : Pr.</b> </p>
          <span>{{ $perso->name }}</span>
        </div>
            @endif
            @if($perso->rolle == "DA")
          <div class="col-md-4">  
       <p> <b>Le Directeur Adjoint :</b> </p>
          <span> {{ $perso->name }} </span>
        </div>
            @endif
            @if($perso->rolle == "S")
          <div class="col-md-4">
      <p> <b>Le Secrétaire Général :</b></p> <span>{{ $perso->name }}</span>
          </div>
           @endif
          @endforeach
          
</div>
</div>

   @endsection