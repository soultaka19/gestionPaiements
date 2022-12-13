<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiant(){
        return $this->hasMany(etudiant::class);
    }
}
