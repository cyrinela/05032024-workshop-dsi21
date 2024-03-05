<?php
//on vas travailller les routes ici 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Ressource/views/contact.blade.php
//routes -> views (il sagit pas de principe de mvc )
//on doit ajouter le controller (contactcontroller.php)
Route::get('/contact', [ContactController::class,'getContact']);
