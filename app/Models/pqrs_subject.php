<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pqrs_subject extends Model
{
    use HasFactory;

    public function pqrs_dependence()
    {
        return $this->belongsTo(pqrs_dependence::class);
    }
    public function pqrs_gcb()
    {
        return $this->hasMany(pqrs_gcb::class);
    }
}
