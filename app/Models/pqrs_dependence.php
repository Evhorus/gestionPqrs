<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs_dependence extends Model
{
    use HasFactory;
    public function pqrs_subject()
    {
        return $this->hasMany(Pqrs_subject::class);
    }
    protected $fillable = [
        'name',
    ];
}
