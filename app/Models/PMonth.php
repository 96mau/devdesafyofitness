<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PYear;

class PMonth extends Model
{
    use HasFactory;
    protected $table = 'PMonth';

    protected $fillable = ['id_PYeard','mes','peso','por_grasa','lbs_grasa','masa_muscular','bmi'];

    //realacion 1 a muchos inversa
    public function  year() {
        return $this->belongsTo('App\Models\PYear');
    }

}
