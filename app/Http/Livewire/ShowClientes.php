<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use Livewire\Component;


class ShowClientes extends Component
{

    public $Iid_clie, $Inombre, $Iapellido, $Itelefono, $Iemail, $If_nacimiento, $Igenero, $Iestatura, $Iactivo, $Ipago, $If_pago;

    public $name;
    public $email;

    protected $rules = [
        'Inombre' => 'required|min:3',
        'Iapellido' => 'required|min:3',
        'Itelefono' => 'required|min:10',
        'Iemail' => 'required|unique:clientes,email',
        'If_nacimiento' => 'required|',
        'Igenero' => 'required',
        'Iestatura' => 'required',
        'Iactivo' => 'required',
        'Ipago' => 'required',
        'If_pago' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        // $validatedData = $this->validate();
        $this->validate();


        $DatClientes=new Clientes();
        $DatClientes->nombre=$this->Inombre;
        $DatClientes->apellido=$this->Iapellido;
        $DatClientes->telefono=$this->Itelefono;
        $DatClientes->email=$this->Iemail;
        $DatClientes->f_nacimiento=$this->If_nacimiento;
        $DatClientes->genero=$this->Igenero;
        $DatClientes->estatura=$this->Iestatura;
        $DatClientes->activo=$this->Iactivo;
        $DatClientes->pago=$this->Ipago;
        $DatClientes->f_Pago=$this->If_pago;
        $DatClientes->save();

        session()->flash('message', 'El nuevo cliente fue registrado exitosamente');
        $this->clearitems();
    }

    public function clearitems (){
            $this->Iid_clie = '';
            $this->Inombre='';
            $this->Iapellido='';
            $this->Itelefono='';
            $this->Iemail='';
            $this->If_nacimiento='';
            $this->Igenero='';
            $this->Iestatura='';
            $this->Iactivo='';
            $this->Ipago='';
            $this->If_pago='';
    }

    public function render()
    {
        return view('livewire.show-clientes');
    }
}
