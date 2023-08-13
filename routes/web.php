<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaController;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Http\Controllers\Pesosmasas;
use App\Http\Livewire\Pesosxcliente;

// ruta para crear dominio locale_accept_from_http
// 1- abrir bloc de notas como administrador
// 2-abrir C:\Windows\System32\drivers\etc\hosts
// 3- escribir al final 127.0.0.1       desafyofitness.online

// 4- en xampp abrir  -- C:\xampp\apache\conf\extra\httpd-vhosts.conf
// 5- poner el sig codigo
//     ---
//     NameVirtualHost *
// <VirtualHost *>
//   DocumentRoot "C:\xampp\htdocs"
//   ServerName localhost
// </VirtualHost>

// <VirtualHost *>
//   DocumentRoot "C:\xampp\htdocs\Desarrollos\2024\desafyofitness\public"
//   ServerName miproyecto.local.com
//   <Directory "C:\xampp\htdocs\Desarrollos\2024\desafyofitness\public">
//     Require all granted
//   </Directory>
// </VirtualHost>



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

// rutas de solo website --------------------------------------------------

//Whatsapp
Route::get('/envia', [WaController::class,'envia']);

Route::get('/ind', function () {
    return view('website.indexcopi');
})->name('ind');

Route::get('/', function () {
    return view('website.index');
})->name('index');

Route::get('/home', function () {
    return view('website.index');
})->name('home');

Route::get('/nosotros', function () {
    return view('website.nosotros');
})->name('nosotros');
Route::get('/servicios', function () {
    return view('website.servicios');
})->name('servicios');
Route::get('/galeria', function () {
    return view('website.galeria');
})->name('galeria');
Route::get('/contactanos', function () {
    return view('website.contactanos');
})->name('contactanos');

//emviar correo a contactanos
route::post('enviar-contactanos', function() {
    // return request()->all();($name, $email, $phone, $subject, $message)
    // Mail::to(request()->email)->send(new EnviarCorreo(request()->name,request()->email,request()->phone,request()->subject,request()->message));
    Mail::to('desafyofitness@gmail.com')->send(new EnviarCorreo(request()->name,request()->email,request()->phone,request()->subject,request()->message));
    return redirect()->route('contactanos')->with('success', 'Correo Enviado Correctamente');
})->name('enviar-contactanos');



// trutas de adminLTE --------------------------------------------------
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('adminLTE.clientesindex');
    })->name('dashboard');


    Route::get('/clientes', function () {
        return view('adminLTE.clientesindex');
    })->name('clientes');

    Route::get('/admin', function () {
        // return view('Panel');
        return redirect(route('adminLTE.clientesindex'));
    })->middleware(['auth', 'verified'])->name('admin');


    // Route::controller(Pesosmasas::class)->group(function () {
    //     Route::get('/pesosmasas/{idcliente}', 'pesosindex');
    //     Route::post('/orders', 'store');
    // });

    // Route::get('mostrarpesos/{idcliente}', [Pesosmasas::class, 'pesosindex'])->name('mostrarpesos');

    Route::get('/mostrarpesos/{id}', Pesosxcliente::class)->name("mostrarpesos");

});
