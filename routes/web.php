<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/**les routes du model classe */

Route::get('/addclasse',[ClasseController::class,'index']);

Route::get('/tabclasse',[ClasseController::class,'show'])->name('tabclasse');

Route::post('/classe',[ClasseController::class,'store'])->name('postclasse');

Route::get('/editclasse/{id}',[ClasseController::class,'edit']);

Route::post('/updateclasse',[ClasseController::class,'update'])->name('updateclasse');

Route::get('/deleteclasse/{id}',[ClasseController::class,'destroy']);

/**-------------------------fin des routes du model classe *-------------/


/**les routes du model classe */

Route::get('/addetudiant',[EtudiantController::class,'index']);

Route::get('/tabetudiant',[EtudiantController::class,'show'])->name('tabetudiant');

Route::post('/etudiant',[EtudiantController::class,'store'])->name('postetudiant');

Route::get('/editetudiant/{id}',[EtudiantController::class,'edit']);

Route::post('/updateetudiant',[EtudiantController::class,'update'])->name('updateetudiant');

Route::get('/deleteetudiant/{id}',[EtudiantController::class,'destroy']);
/**fin des routes du model classe */


/**les routes du model caissier */
Route::get('/addcaissier',[CaissierController::class,'index']);

Route::get('/tabcaissier',[CaissierController::class,'show'])->name('tabcaissier');

Route::post('/caissier',[CaissierController::class,'store'])->name('postcaissier');

Route::get('/editcaissier/{id}',[CaissierController::class,'edit']);

Route::post('/updatecaissier',[CaissierController::class,'update'])->name('updatecaissier');

Route::get('/deletecaissier/{id}',[CaissierController::class,'destroy']);

/**fin des routes du model caissier */


/*route du model encaisser */

Route::get('/addencaisser',[EncaisserController::class,'index']);

Route::get('/tabencaisser',[EncaisserController::class,'show'])->name('tabencaisser');

Route::post('/encaisser',[EncaisserController::class,'store'])->name('postencaisser');

Route::get('/editencaisser/{id}',[EncaisserController::class,'edit']);

Route::post('/updateencaisser',[EncaisserController::class,'update'])->name('updateencaisser');

Route::get('/deleteencaisser/{id}',[EncaisserController::class,'destroy']);

/** fin  des routes du model encaisser */

require __DIR__.'/auth.php';
