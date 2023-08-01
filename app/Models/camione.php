<?php

namespace App\Models;

use App\Models\truks\truks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camione extends Model
{
    protected $primaryKey = 'dni';
    protected $guarded = [];  
       //relacion uno a muchos: un camionero puede conducir varios carros
    public function camione()
    {
        return $this->hasMany(truks::class, 'camione_dni', 'dni');   
    }
}
