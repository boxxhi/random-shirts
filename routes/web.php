<?php

use App\Http\Controllers\CamisaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');

});

Route::get('/home', function () {
    return view('home');

});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', [ClienteController::class, 'index'])->name("login");

Route::get('/registro', function() {
    return view('register');
})->name('registro');

Route::get('/dashboard', [ClienteController::class, 'showPanel'])
    ->middleware('auth')->name('dashboard');

Route::get('/designer', function () {
    return view('designer');
})->middleware('auth')->name('designer');

Route::post('/cliente_login', [ClienteController::class, 'login']);
Route::post('/cliente_registro', [ClienteController::class, 'registration']);



Route::get('/logout', function() {
    Auth::logout();
    return redirect('/')->with('success', 'Sesión cerrada correctamente');
})->name('logout')->middleware('auth');


Route::post('/addshirt', [CamisaController::class, 'registrarCamisa'])
    ->middleware('auth')->name('camisa_registrar')->withoutMiddleware(VerifyCsrfToken::class);


Route::post('/sendcontact', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:500',
    ]);

    // Aquí podrías enviar el mensaje por correo o guardarlo en la base de datos
    return redirect('/contact')->with('success', 'Mensaje enviado correctamente');
})->name('send_contact');
