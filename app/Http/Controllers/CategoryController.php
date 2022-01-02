<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showDir(){

       $directions = \App\User::get();
       $services = \App\Service::get();

      return view('info.Administration' , compact('directions' , 'services'));

    }
    public function index(){

        return view('About');

     }
    public function showDep(){

      $depInf = \App\Departement::find(1);
      $depCiv = \App\Departement::find(2);
      //dd($depInf);
      $depInFils = $depInf->filières;
      $depCivFils = $depCiv->filières;

     return view('info.Departement' , compact('depInf' ,'depCiv', 'depInFils' , 'depCivFils'));   

     }
    public function etudes(){
   
      return view('Etudes');
     	
     }
      public function Cond_Reg(){
   
      return view('info.reglements');
     	
     }
   
     
}
