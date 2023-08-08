<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use App\Models\PMonth;
use App\Models\PYear;
use Livewire\Component;

class Pesosxcliente extends Component
{
    public $id_cliente;
    public $DatCliente, $PYear, $PMonts;

    public $NewYeard;

    public function mount($id)
    {
        $this->id_cliente = $id;
        $this->DatCliente= Clientes::find($id);
        $this->RefreschYeard();
    }

    public function RefreschYeard() {
        $this->PYear = PYear::where('id_cliente', '=', $this->id_cliente)->orderByDesc('year')->get();
    }

    public function PesoMes($id)
    {
        $this->PMonts = PMonth::where('id_PYeard', '=', $this->id_cliente)
                        ->orderByDesc('mes')
                        ->orderByDesc('created_at')
                        ->get();
    }

    public function AddYeard()
    {
        if ($this->NewYeard > 0 and $this->NewYeard < 2099) {
            $DatNewYear=new PYear();
            $DatNewYear->id_cliente=$this->id_cliente;
            $DatNewYear->Year=$this->NewYeard;
            $DatNewYear->save();

            $this->RefreschYeard();
        }
    }

    public function render()
    {
        return view('livewire.pesosxcliente')->layout('components.baseAdminLTE');
    }
}
