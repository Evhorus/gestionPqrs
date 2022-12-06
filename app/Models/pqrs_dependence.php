<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pqrs_dependence extends Model
{
    use HasFactory;
    public function pqrs_subject()
    {
        return $this->hasMany(pqrs_subject::class);
    }
}
