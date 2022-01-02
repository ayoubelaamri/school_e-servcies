<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
{
    public function ViewAll(){
    	$actualite=Actualite::all();
    	$arr=Array('actualite'=>$actualite);
    	return view('actualite.viewAll',$arr);
    }


    public function add(Request $request)
        {      
                    if($request->isMethod('post'))
                {
                    $newActualite = new Actualite();
                    $newActualite->name = $request->input('name');
                    $newActualite->texte = $request->input('texte');
                    $newActualite->save();

                    $actualite=Actualite::all();
                    $arr=Array('actualite'=>$actualite);
                    return view('actualite.viewAll',$arr);
                }
            else 
                {
                    return view('actualite.add');
                }
        }
                
     
      public function edit(Request $request,$id)
        {
            
            
            if($request->isMethod('post')) 
                {
                    $actualite =Actualite::find($id);
                    $actualite->name = $request->input('name');
                    $actualite->texte = $request->input('texte');
                    $actualite->save();
                    
                    return redirect("Actualite");
                }
            
            else  
                {
                    $actualite = Actualite::find($id);
                    $arr=Array('actualite'=>$actualite); 
                    return view('actualite.edit',$arr); 
                }
                
        }


     public function voirpls( Request $id){
        $actualite=Actualite::find($id);
        return view('actualite.voirpls');
     }

     public function land(){
        $actualite=Actualite::all();
        $arr=Array('actualite'=>$actualite);
        return view('landing',$arr);
    }

}