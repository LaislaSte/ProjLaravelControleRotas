<?php

<<<<<<< HEAD
=======
use App\Models\Produto;
use Illuminate\Http\Request;
>>>>>>> 01eb9aebcaac72c7e52ba720253ff26be9e79bf9
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
<<<<<<< HEAD
Route::get('minhaprimeiraview', function () {
    return view('segundaview');
});
=======

Route::post('/cadastrar-produto', function(Request $request){
	
    Produto::create([
        'nome'=>$request->nome,
        'valor'=>$request->valor,
        'estoque'=>$request->estoque,
    ]);

    echo "Produto criado com sucesso!";
});
>>>>>>> 01eb9aebcaac72c7e52ba720253ff26be9e79bf9
