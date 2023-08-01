<?php

namespace App\Models\package;

use App\Models\truks\truks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $table = 'package';
        protected $fillable = ['codigo', 'descripcion', 'destinario', 'direccion'];

        public function driver()

        {
            return $this->belongsTo(truksdriver::class, 'destino');
        }
   
}
