@extends('layouts.app2')

@section('content')

<table style="margin-top: 120px;" class="table table-hover">
  <thead>
    <tr>
    <div class="row">
    	<div class="col-md-4">
       <td scope="col" class=""><b> Départements </b></td>   		
 
    	</div>

    	<div class="col-md-8">

    		<td scope="col">
    		 L'enseignement et la recherche à l'École Nationale des Sciences Appliquées d’Al-Hoceima sont organisés en départements correspondant à des disciplines et des champs d'étude et de recherche variés.Chaque département regroupe des enseignants chercheurs et des entités administratives. Cette page décrit la structure des départements de l’établissement : 
    		</td>
    		
    	</div>
    </div>	
    </tr>
  </thead>
  <tbody>
  	<tr class="table-success">
      <td scope="row">{{ $depInf->titre }}</td>
      <td class="matinf"><i class="fa fa-caret-right ui-icon"></i>  Chef de département et Coordonnateurs
       <br><br> 
      	<ul>
         <li> Chef de département : {{ $depInf->chef_departement }} ( email : {{ $depInf->email }} ) </li></ul>
         <ul>
         <li>Coordonnateur de la filière Génie Informatique : {{ $depInFils->find(1)->coordonnateur }} ( email : {{ $depInFils->find(1)->email }} )</li></ul>
         <ul> 
         <li> Coordonnateur de la filière STPI (CP) : {{ $depInFils->find(2)->coordonnateur }} ( email : {{ $depInFils->find(2)->email }} )</li></ul>
   
       <p><i class="fa fa-caret-right ui-icon"></i> Corps enseignant du département </p>
      
      <div class="row">
      
      @foreach($depInf->users as $prof)

       	<div class="col-md-3">
       		<ul>
       	  <li> {{ $prof->name }}</li>
       		</ul>
       	</div>
     @endforeach
       </div>
      
      </td>
    </tr>
    <tr class="table-dark">
      <th scope="row">{{ $depCiv->titre }}</th>
      <td class="matinf">  <i class="fa fa-caret-right ui-icon"></i>  Chef de département et Coordonnateurs
      <br> <br>
      	<ul>
         <li> Chef de département : {{ $depCiv->chef_departement }} ( email : {{ $depCiv->email }} )</li>
     </ul>
        <ul> <li>Coordonnateur de la filière Génie Civil : {{ $depCivFils->find(3)->coordonnateur }} ( email : {{ $depCivFils->find(3)->email }} )</li> 
        </ul>
         <ul><li> Coordonnateur de la filière G.E.E : {{ $depCivFils->find(4)->coordonnateur }} ( email : {{ $depCivFils->find(4)->email }})</li>
         </ul>
         <ul>
         <li>Coordonnateur de la filière G.E.E.R : {{ $depCivFils->find(5)->coordonnateur }} ( email : {{ $depCivFils->find(5)->email }} )</li>
      	</ul>
     <p> <i class="fa fa-caret-right ui-icon"></i> Corps enseignant du département </p>
     <div class="row">
     	@foreach($depCiv->users as $prof)
  <div class="col-md-3">
     <ul>

        <li>{{ $prof->name }}</li>
       
     </ul>
</div>
     	@endforeach

     </div>

    </tr>
  </tbody>
</table> 


@endsection