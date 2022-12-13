<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caissier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiant()
    {
        return $this->belongsToMany(etudiant::class);
    }
}
