<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\PYear;
use Illuminate\Http\Request;

class Pesosmasas extends Controller
{
    public function pesosindex($id)
    {
        // $cliente= Clientes::all();

        // $pesos = PYear::where('id_cliente', $idcliente)->get();
        return view('adminLTE.pesosmasas');

    }

}
