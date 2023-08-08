<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PMonth;
use App\Models\Clientes;

class PYear extends Model
{
    use HasFactory;
    protected $table = 'PYeard';

    protected $fillable = ['id_cliente','Year'];

    //realacion 1 a muchos inversa
    public function  cliente() {
        return $this->belongsTo('App\Models\Clientes');
    }

    //realacion 1 a muchos
    public function  Months() {
        return $this->hasMany('App\Models\PMonth');
    }
}
