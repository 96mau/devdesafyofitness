<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use Livewire\Component;
use PhpParser\Builder\Function_;

class SearchClientes extends Component
{

    public $Iid_clie, $Inombre, $Iapellido, $Itelefono, $Iemail, $If_nacimiento, $Igenero, $Iestatura, $Iactivo, $Ipago, $If_pago;

    public $search;
    public $deleteId = '';
    public $updateId = '';

    public $isOpen = false;


    protected $rules = [
        'Inombre' => 'required|min:3',
        'Iapellido' => 'required|min:3',
        'Itelefono' => 'required|min:10',
        'Iemail' => 'required|unique:Clientes,email',
        'If_nacimiento' => 'required|',
        'Igenero' => 'required',
        'Iestatura' => 'required',
        'Iactivo' => 'required',
        'Ipago' => 'required',
        'If_pago' => 'required',
    ];


    public function render()
    {
        $clientes = Clientes::all();
        $clientes= Clientes::where('nombre', 'like', '%'.$this->search.'%')->get();
        return view('livewire.search-clientes', compact('clientes'));

    }

    public function updateId($id)
    {
        $DatClientes= Clientes::find($id);
        $this->updateId = $id;

        $this->Inombre = $DatClientes->nombre;
        $this->Iapellido = $DatClientes->apellido;
        $this->Itelefono = $DatClientes->telefono;
        $this->Iemail = $DatClientes->email;
        $this->If_nacimiento = $DatClientes->f_nacimiento;
        $this->Igenero = $DatClientes->genero;
        $this->Iestatura = $DatClientes->estatura;
        $this->Iactivo = $DatClientes->activo;
        $this->Ipago = $DatClientes->pago;
        $this->If_pago = $DatClientes->f_Pago;

    }
    public function cerrarModal()
    {
        $this->isOpen = false;
        $this->emit('cerrarModal'); // Emite el evento para cerrar el modal
    }
    public Function UpdateRecord (){

        $this->validate();

        $UpClientes= Clientes::find($this->updateId);
        $UpClientes->nombre = $this->Inombre;
        $UpClientes->apellido = $this->Iapellido;
        $UpClientes->telefono = $this->Itelefono;
        $UpClientes->email = $this->Iemail;
        $UpClientes->f_nacimiento = $this->If_nacimiento;
        $UpClientes->genero = $this->Igenero;
        $UpClientes->estatura = $this->Iestatura;
        $UpClientes->activo = $this->Iactivo;
        $UpClientes->pago = $this->Ipago;
        $UpClientes->f_Pago = $this->If_pago;
        $UpClientes->update();

        $this->updateId = "";
        session()->flash('message', 'El CLIENTE fue actualzado');
        $this->cerrarModal();
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        Clientes::find($this->deleteId)->delete();
        $this->deleteId = "";
    }

    public Function DeleteRecord ($id){
        $clientes= Clientes::find($id);
        $clientes->delete();

        session()->flash('message', 'El CLIENTE fue Eliminado');
    }

}
