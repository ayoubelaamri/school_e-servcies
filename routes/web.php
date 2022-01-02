<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Departement;
use App\Filiere;
use App\Prof;
use App\User;
use App\Actualite;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','ActualiteController@land')->name('landing');

Route::get('/galeries', function () {
    return view('galeries');
});


//route departement
Route::get('/departements', 'DepartementController@index');
Route::get('/ajouter', 'DepartementController@ajouter_depar');
Route::get('departements-modifier-{id}', 'DepartementController@edit');
Route::post('/save', 'DepartementController@store');
Route::put('update-{id}', 'DepartementController@update');
Route::delete('supprimer-{id}', 'DepartementController@destroy');

//route filiere
Route::get('/filieres', 'FiliereController@index');
Route::get('ajouter_filiere', 'FiliereController@ajouter_fil');
Route::post('/save_fil', 'FiliereController@store');
Route::get('filiere/modifier/{id}', 'FiliereController@edit');
Route::put('update_fil/{id}', 'FiliereController@update');
Route::delete('supprimer_fil/{id}', 'FiliereController@destroy');

//route de module
Route::get('/modules', 'ModuleController@index');
Route::get('/module-{id}', 'ModuleController@afficher');
Route::get('/add_module-f={id_fil}-s={id_sem}', 'ModuleController@ajouter');
Route::post('/save_module-f={id_fil}-s={id_sem}', 'ModuleController@store');
Route::get('edit_module-{id}', 'ModuleController@edit');
Route::put('edit-{id}', 'ModuleController@update');
Route::delete('module-delete-f={id_fil}-s={id_mod}', 'ModuleController@destroy');

//route prof
Route::get('/profs', 'ProfController@index');
Route::get('/prof/ajouter', 'ProfController@add');
Route::post('/save_prof', 'ProfController@store');
Route::get('/prof/modifier/{id}', 'ProfController@edit');
Route::put('/prof/update/{id}', 'ProfController@update');
Route::delete('prof/supprimer/{id}', 'ProfController@destroy');

//route d'etudiant
Route::get('/etudiants', 'EtudiantController@index');
Route::get('/etudiant/modifier/{id}', 'EtudiantController@edit');
Route::put('/etudiant/update/{id}', 'EtudiantController@update');
Route::delete('etudiant/supprimer/{id}', 'EtudiantController@destroy');

//Epmlois du temps
Route::get('/admin', 'adminController@admin');
Route::get('/emplois-creat', 'EmploiController@create');
Route::post('/emplois','EmploiController@store');
Route::get('/emplois', 'EmploiController@index');
Route::get('/emplois-{id}-edit', 'EmploiController@edit');
Route::put('/emplois-{id}', 'EmploiController@update');
Route::delete('/emplois-{id}', 'EmploiController@destroy');
Route::get('/Emplois du temps', function () {
    return view('Emplois du temps');
});

//Actualités
Route::get('/actualites-info-{id}','ActualiteController@voirpls')->name('voir plus');
Route::get('/actualites','ActualiteController@viewAll')->name('Actualite');
Route::get('/actualites-add','ActualiteController@add')->name('Ajouter');
Route::post('/actualites-add','ActualiteController@add');
Route::get('/actualites-delete-{id}', function($id)
		{
			$actualite=Actualite::find($id);
			$actualite->delete();
			return redirect('/actualites');
		}
	);
Route::get('/actualites-edit-{id}','ActualiteController@edit');
Route::post('/actualites-edit-{id}',"ActualiteController@edit");


//info
Route::get('/presentation', function () {
    return view('info.about');
});
Route::get('/administration', function () {
    return view('info.Administration');
});

Route::get('/etudes', function () {
    return view('info.Etudes');
});
Route::get('/reglements', function () {
    return view('info.reglement');
});




    Route::get('/direction' ,'CategoryController@showDir')->name('direction');
    Route::get('/departement' ,'CategoryController@showDep')->name('departement');
    Route::get('/études' ,'CategoryController@etudes')->name('etudes');
    Route::get('/Condition Et Reglements' ,'CategoryController@Cond_Reg')->name('cond_reg');

