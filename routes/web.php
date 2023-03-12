<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

use App\Http\Controllers\ListController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/lists', [ListController::class, 'store']);
Route::get('/criar/tarefa', [ListController::class, 'create'])->middleware('auth');
Route::get('/lista/{id}', [ListController::class, 'show']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ListController::class, 'index']
    )->name('dashboard');
});

Route::get('/concluido/{id}', [ListController::class, 'concluido']);
Route::get('/apagar/{id}', [ListController::class, 'delete']);

Route::get('/profile/show', function(){
    return view('profile.show');
});

Route::get('/email/verify', function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');