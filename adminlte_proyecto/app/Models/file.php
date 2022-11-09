<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function candidatos(){
        return $this->belongsTo(Candidato::class, 'candidatos_id');
    }
}

