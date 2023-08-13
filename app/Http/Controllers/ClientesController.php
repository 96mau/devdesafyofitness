<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('adminLTE.clienteindex', compact('clientes'));
    }

    public function listclientes()
    {
        return view('livewire.list-clientes');
    }

    public function ShowClientes()
    {
        return view('adminLTE.ShowClientes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes=new Clientes();
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->telefono=$request->input('telefono');
        $clientes->email=$request->input('email');
        $clientes->f_nacimiento=$request->input('f_nacimiento');
        $clientes->genero=$request->input('genero');
        $clientes->activo=$request->input('activo');
        $clientes->pago=$request->input('pago');
        $clientes->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes= Clientes::find($id);
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->telefono=$request->input('telefono');
        $clientes->email=$request->input('email');
        $clientes->f_nacimiento=$request->input('f_nacimiento');
        $clientes->genero=$request->input('genero');
        $clientes->activo=$request->input('activo');
        $clientes->pago=$request->input('pago');
        $clientes->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientes= Clientes::find($id);
        $clientes->delete();
        return redirect()->back();

    }
}
