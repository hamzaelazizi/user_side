<?php
use App\Ouvrage;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addprofp', 'AjouterMembreController@addprofp');
Route::get('/addprofnp', 'AjouterMembreController@addprofnp');
Route::get('/adddoc', 'AjouterMembreController@adddoc');
Route::get('/adddoctorant', 'AjouterMembreController@adddoctorant');

Route::post('/ajouterprofp', 'AjouterMembreController@ajouterprofp');

Route::get('/test', 'AjouterMembreController@test');



Route::get('/AjouterDoctorat', function () {
    return view('AjouterDoctorat');
});

Route::get('/AjouterManifestation', function () {
    return view('AjouterManifestation');
});

Route::get('/AjouterOuvrage', function () {
    return view('AjouterOuvrage');
});

Route::get('/AjouterChapitre', function () {
    return view('ajouterChapitre');
});

Route::get('/AjouterConference', function () {
    return view('ajouterConference');
});

Route::get('/AjouterArticle', function () {
    return view('ajouterArticle');
});

Route::get('/', function () {
    return view('AjouterOuvrage');
});

Route::resource('ouvrages','OuvrageController');
Route::resource('doctorats','DoctoratController');
Route::resource('manifestations','ManifestationController');
Route::resource('articles','ArticleController');
Route::resource('conferences','ConferenceController');
Route::resource('chapitres','ChapitreController');

Route::post('/updateOuvrage','OuvrageController@edit');
Route::post('/updateDoctorat','DoctoratController@edit');
Route::post('/updateManifestation','ManifestationController@edit');
Route::post('/updateArticle','ArticleController@edit');
Route::post('/updateConference','ConferenceController@edit');
Route::post('/updateChapitre','ChapitreController@edit');

//Route::get('/update_ouvrage/{id}', );