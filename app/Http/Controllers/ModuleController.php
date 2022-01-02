<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Module;
use App\User;
use App\Element;
use App\Semestre;
use App\Note;
use App\Filiere;
use App\Filiere_module;

use DB;

class ModuleController extends Controller
{
    public function index(){
		$fil=DB::select('SELECT * FROM filieres');
		$arr = array('fil' => $fil);
		return view('admin.module',$arr);
	}

	 public function afficher($id){
	 	$semestre=DB::select('SELECT * FROM semestres');
	 	$fil=Filiere::find($id);
	 	$mod = $fil->modules;
        $arr=array('semestre'=>$semestre,'mod'=>$mod,'fil'=>$fil);
		return view('admin.module_par_filiere',$arr);
	}

	public function ajouter($id_fil,$id_sem){
        $arr=array('id_fil'=>$id_fil,'id_sem'=>$id_sem);
		return view('admin.ajouter_module',$arr);
	}

	public function store(Request $request,$id_fil,$id_sem){

		$mod = new Module();
		$mod->name = $request->input('name');
		$mod->semestre_id = $id_sem;
		$mod->user_id = $request->input('responsable');
		$mod->save();

		$mod->filieres()->attach($id_fil);

		session()->flash('success','le module a été bien ajoutée ');
		return redirect('module');
		
	}

	public function edit($id){
		$mod=Module::find($id);
		$arr = array('mod' => $mod);
		return view('admin.modifier_mod',$arr);
	}

	public function update(Request $request, $id){
		$mod = Module::find($id);
		$mod->name = $request->input('name');
		$mod->user_id = $request->input('responsable');
		$mod->save();

		session()->flash('success2','la modification a été bien enregistrée ');
		return redirect('module');
	}

	public function destroy(Request $request, $id_fil,$id_mod){
		$var = Module::find($id_mod);
		$var->filieres()->detach($id_fil);
		$var->delete();
		session()->flash('success3','la supprission a été bien fait ');
		return redirect('module');
	}
}
