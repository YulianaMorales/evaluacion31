<?php

namespace App\Models\truks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truks extends Model
{
    protected $primaryKey = 'matricula';
    public  $incrementing= false;
      //relacion muchos a uno: un camion es conducido por un camionero
    protected $fillable = ['matricula', 'potencia', 'modelo', 'tipo'];

    public function drivers()
    {
        return $this->BelongsToMany(truksdriver::class, 'conduce', 'truk_dni', 'driver_dni');
    }
}
