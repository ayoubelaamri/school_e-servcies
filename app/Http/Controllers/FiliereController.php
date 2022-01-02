<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Filiere;

use App\User;

use DB;

class filiereController extends Controller
{
    public function index(){
		$fil=DB::select('SELECT * FROM filieres');
		$arr = array('fil' => $fil);
		return view('admin.filiere',$arr);
	}

	public function ajouter_fil(){
		$dep=DB::select('SELECT * FROM departements');
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('dep' => $dep, 'prof' => $prof);
		return view('admin.ajouter_fil',$arr);
	}

	public function store(Request $request){
		$filiere = new Filiere();
		$filiere->titre = $request->input('titre');
		$filiere->departement = $request->input('departement');
		$filiere->description = $request->input('description');
		$filiere->chef_filiere = $request->input('chef');
		$filiere->save();
		session()->flash('success','la filiere a été bien enregistrée ');
		return redirect('filieres');
	}	

	public function edit($id){
		$fil=Filiere::find($id);
		$dep=DB::select('SELECT * FROM departements');
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('dep' => $dep, 'prof' => $prof, 'fil' => $fil);
		return view('admin.modifier_fil',$arr);
	}

	public function update(Request $request, $id){
		$filiere = Filiere::find($id);
		$filiere->titre = $request->input('titre');
		$filiere->departement = $request->input('departement');
		$filiere->description = $request->input('description');
		$filiere->chef_filiere = $request->input('chef');
		$filiere->save();

		/*$fil=DB::select('SELECT * FROM filieres');
		$arr = array('fil' => $fil);*/
		session()->flash('success2','la modification a été bien enregistrée ');
		return redirect('filiere');
	}

	public function destroy(Request $request, $id){
		$var = Filiere::find($id);
		$var->delete();
		session()->flash('success3','la supprission a été bien fait ');
		return redirect('filiere');
	}
}
