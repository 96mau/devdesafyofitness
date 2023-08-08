<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    // protected $table = ''
    protected $table = 'clientes';


    protected $fillable = ['nombre','apellido','telefono','email','email_verified_at','f_nacimiento','genero','estatura','activo','pago','f_Pago'];

    // realacion 1 a muchos
    public function  years() {
        return $this->hasMany('App\Models\PYear');
    }
}

