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
    public $FP_id, $FP_id_PYeard, $FP_mes, $FP_peso, $FP_por_grasa, $FP_lbs_grasa, $FP_masa_muscular, $FP_bmi;
    public $FP_id_delete, $id_PYeard_Lista, $yeard_lista;
    public $isOpen;

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
        $this->id_PYeard_Lista = $id;
        $yeards= PYear::find($id);
        $this->yeard_lista= $yeards->Year;
        $this->PMonts = PMonth::where('id_PYeard', '=', $id)
                        ->orderByDesc('mes')
                        ->orderByDesc('created_at')
                        ->get();

    }

    public function EditPesoMes($id)
    {
        $DatPesoMasa= PMonth::find($id);


        $this->FP_id=$DatPesoMasa->id;
        $this->FP_id_PYeard=$DatPesoMasa->id_PYeard;
        $this->FP_mes=$DatPesoMasa->mes;
        $this->FP_peso=$DatPesoMasa->peso;
        $this->FP_por_grasa=$DatPesoMasa->por_grasa;
        $this->FP_lbs_grasa=$DatPesoMasa->lbs_grasa;
        $this->FP_masa_muscular=$DatPesoMasa->masa_muscular;
        $this->FP_bmi=$DatPesoMasa->bmi;

    }

    public function cerrarModal()
    {
        $this->isOpen = false;
        $this->emit('cerrarModal'); // Emite el evento para cerrar el modal
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

    public function AddPesoMasa()
    {
        if ($this->FP_id_PYeard > 0) {

            if ($this->FP_id > 0) $DatNewPeso= PMonth::find($this->FP_id );
            else $DatNewPeso=new PMonth();

            $this->id_PYeard_Lista = $this->FP_id_PYeard;

            // $DatNewPeso=new PMonth();
            $DatNewPeso->id_PYeard=$this->FP_id_PYeard;
            $DatNewPeso->mes=$this->FP_mes;
            $DatNewPeso->peso=$this->FP_peso;
            $DatNewPeso->por_grasa=$this->FP_por_grasa;
            $DatNewPeso->lbs_grasa=$this->FP_lbs_grasa;
            $DatNewPeso->masa_muscular=$this->FP_masa_muscular;
            $DatNewPeso->bmi=$this->FP_bmi;
            // $DatNewPeso->save();

            if ($this->FP_id > 0) $DatNewPeso->update();
            else $DatNewPeso->save();

            $this->clearPesoMasa();
            $this->cerrarModal();
            $this->RefreschYeard();
        }
    }

    public function deletePesoMasa_Id($id)
    {
        $this->FP_id_delete = $id;
    }

    public Function DeleteRecordPesoMasa (){

        PMonth::find($this->FP_id_delete)->delete();

        $this->FP_id_delete = "";
        session()->flash('message', 'El registro fue Eliminado');
    }


    public function clearPesoMasa (){
        $this->FP_id="";
        $this->FP_id_PYeard="";
        $this->FP_mes="";
        $this->FP_peso="";
        $this->FP_por_grasa="";
        $this->FP_lbs_grasa="";
        $this->FP_masa_muscular="";
        $this->FP_bmi="";
    }

    public function render()
    {
        $this->RefreschYeard();
        if ($this->id_PYeard_Lista > 0) $this->PesoMes($this->id_PYeard_Lista);

        return view('livewire.pesosxcliente')->layout('components.baseAdminLTE');
    }
}
