<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Prof;

use App\User;

use DB;

class ProfController extends Controller
{
     public function index(){
		$prof=User::where('rolle','!=', NULL)->get();
		$arr = array('prof' =>$prof);
		return view('admin.prof',$arr);
	}

	 public function add(){
		return view('admin.add_prof');
	}

	public function store(Request $request){
		$prof = new User();
		$prof->name = $request->input('nom');
		$prof->email = $request->input('email');
		$prof->rolle = $request->input('rolle');
		$prof->save();
		session()->flash('success','le prof a été bien ajouté ');
		return redirect('prof');
	}

	public function edit($id){
		$prof=User::find($id);
		$arr = array('prof' => $prof);
		return view('admin.modifier_prof',$arr);
	}

	public function update(Request $request, $id){
		$prof = User::find($id);
		$prof->name = $request->input('nom');
		$prof->email = $request->input('email');
		$prof->rolle = $request->input('rolle');
		$prof->save();
		session()->flash('success2','la modification a été bien enregistrée ');
		return redirect('prof');
	}

	public function destroy(Request $request, $id){
		$var = User::find($id);
		$var->delete();
		session()->flash('success3','la supprission a été bien fait ');
		return redirect('prof');
	}

}
