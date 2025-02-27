<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

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

    /* Select database */
/*     $sql = 'SELECT * FROM users WHERE id= ?';
    $users = DB::select($sql, [4]);

    $users = DB::table('users')
    ->where('id', 4)
    ->select('id','name')
    ->toSql();

    $users = \App\Models\User::where('id', 4)
        ->select('id', 'name')
        ->get();
    dd($users); */

   // $user = new \App\Models\User();

   /* Save and Update */

   /*  $user = \App\Models\User::find(31);

    $user->name = 'Diego edited';
    $user->email =  'teste@teste.com';
    $user->password = bcrypt('123456');

    $user->save();
 */

    /* Mass Assignment */

/*     $userData = [
        'name' => 'Diego 2 Edited',
        'email' =>  'teste3@teste.com',
        'password' => bcrypt('123456')
    ]; */

    /* Create */
/*     $user = new \App\Models\User();
    $user->create($userData) */;

    /* Update */
/*     $user = \App\Models\User::find(31);
    $user->update($userData); */


    /* Delete */
   /*  $user = \App\Models\User::find(33);
    $user->delete(); */

/*     $user = \App\Models\User::whereIn('id', [31, 30]);
    $user->delete(); */


    return view('welcome');
});

Route::get('hello/{name?}', function ($name = null) {
    return view('welcome', compact('name'));
    //return redirect()->route('products_single');
});

/* Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/users/', [UserController::class, 'save']); */

//Route::resource('/users', UserController::class);


Route::namespace('Test')->group( function(){
    Route::get('/users/{id}', [UserController::class, 'show']);
});


Route::prefix('products')->name('products_')->group(function(){
    Route::get('/', function(){
        return 'Produtos Index';
    })->name('index'); /* products_index */

    Route::get('/1', function(){
        return 'Produtos 1';
    })->name('single'); /* products_single */
});

Route::view('/view', 'view', ['name'=> 'diego']);

Route::get('show/{name?}/{sobrenome?}', function ($name =  null, $sobrenome = null) {
    if(is_null($name))
        return 'Informe um nome';
    return $name. ' ' . $sobrenome;
});
