<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use DB;

class EtudiantController extends Controller
{
     public function index(){
		$fils=['GI 1','GI 2','GI 3','GC 1','GC 2','GC 3'];
		$users=User::all();
		$arr = array('fils' => $fils , 'users'=> $users);
		return view('admin.etudiant',$arr);
	}

	public function edit($id){
		$etudiant=User::find($id);
		$fils=['GI 1','GI 2','GI 3','GC 1','GC 2','GC 3'];
		$arr = array('etudiant' => $etudiant , 'fils' => $fils);
		return view('admin.modifier_etudiant',$arr);
	}

	public function update(Request $request, $id){
		$etudiant = User::find($id);
		$etudiant->name = $request->input('nom');
		$etudiant->email = $request->input('email');
		$etudiant->cin = $request->input('cin');
		$etudiant->filiere = $request->input('filiere');
		$etudiant->save();
		session()->flash('success2','la modification a été bien enregistrée ');
		return redirect('etudiant');
	}

	public function destroy(Request $request, $id){
		$var = User::find($id);
		$var->delete();
		session()->flash('success3','la supprission a été bien fait ');
		return redirect('etudiant');
	}
}
