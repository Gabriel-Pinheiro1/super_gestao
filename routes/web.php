<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Contatc;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\Supplier;
use App\Http\Controllers\TestController;




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

Route::get('/', [MainController::class, 'main']);

Route::get('/sobre_nos', [AboutUs::class, 'about']);

Route::get('/contato', [Contatc::class, 'contatc']);

Route::prefix('/app')->group(function(){

    Route::get('/login', function(){return 'Login';});
    Route::get('/clientes', function(){return 'Clientes';});
    Route::get('/fornecedores', [Supplier::class, 'index']);
    Route::get('/produtos', function(){return 'Produtos';});
   
});

Route::get ('/teste/{p1}/{p2}', [TestController::class, 'test']);

Route::redirect('/rota2','/rota1');

Route::fallback(function(){
    echo "Sinto muito, mas essa rota não existe ainda na nossa aplicação";
});


