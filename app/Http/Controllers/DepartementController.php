<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Departement;

use App\User;

use DB;

class DepartementController extends Controller
{
    public function index(){
		$dep=DB::select('SELECT * FROM departements');
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('dep' => $dep,'prof'=>$prof);
		return view('admin.departement',$arr);
	}

	public function ajouter_depar(){
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('prof'=>$prof);
		return view('admin.ajouter_depar',$arr);
	}


	public function edit($id){
		$depart=Departement::find($id);
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('depart' => $depart, 'prof' => $prof);
		return view('admin.modifier',$arr);
	}

	public function store(Request $request){

		$depar = new Departement();
		$depar->titre = $request->input('titre');
		$depar->chef_departement = $request->input('chef');
		$depar->description = $request->input('description');
		$depar->save();
		session()->flash('success','la departement a été bien enregistrée ');
		return redirect('departements');
		
	}

	public function update(Request $request, $id){
		$depar = Departement::find($id);
		$depar->titre = $request->input('titre');
		$depar->chef_departement = $request->input('chef');
		$depar->description = $request->input('description');
		$depar->save();
		session()->flash('success2','la modification a été bien enregistrée ');
		return redirect('departements');
	}

	public function destroy(Request $request, $id){
		$var = Departement::find($id);
		$var->delete();
		session()->flash('success3','la supprission a été bien fait ');
		return redirect('departements');
	}
}
