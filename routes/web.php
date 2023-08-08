<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

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


    // Route::controller(Pesosmasas::class)->group(function () {
    //     Route::get('/pesosmasas/{idcliente}', 'pesosindex');
    //     Route::post('/orders', 'store');
    // });

    // Route::get('mostrarpesos/{idcliente}', [Pesosmasas::class, 'pesosindex'])->name('mostrarpesos');

    Route::get('/mostrarpesos/{id}', Pesosxcliente::class)->name("mostrarpesos");

});
