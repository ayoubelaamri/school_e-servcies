<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Emploi;

use App\Http\Requests\emploiRequest;

class EmploiController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    //liste les emplois
    public function index(){
    	$listemploi=Emploi::all();
    	return view('methodes.index',['emplois'=>$listemploi]);

    }
    //afficher la formulaire de creer un emploi
    public function create(){
    	return view('methodes.creat');
    }
    //enregestre un emploi
    public function store(Request $request){
    	$emploi=new Emploi();
    	$emploi->filiere=$request->input('Niveau');
    	$emploi->les_fichers=$request->input('ficher');
    	
    	$emploi->save();
    	session()->flash('success','emploi est bien enregestre');
    	return redirect('emplois');
    }
    //
    public function edit($id){
    	$emploi=Emploi::find($id);
    	return view('methodes.edit',['emplois'=>$emploi]);
    }
    public function update(emploiRequest $request,$id){
    	$emploi=Emploi::find($id);
    	$emploi->filiere=$request->input('Niveau');
    	$emploi->les_fichers=$request->input('ficher');
    	$emploi->save();
        session()->flash('success','emploi est bien modifier');
        $emploi->orderby('updated_at','desc')->get();
    	return redirect('emplois');
    	
    }
    public function destroy(Request $request,$id){
    	$emploi=Emploi::find($id);
    	$emploi->delete();
    	return redirect('emplois');
    }
    
}
