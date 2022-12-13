<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classe(){
        return $this->belongsTo(classe::class);
    }

    public function caissier()
    {
        return $this->belongsToMany(caissier::class);
    }
}
