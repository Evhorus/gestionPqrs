<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs_type extends Model
{
    use HasFactory;
    public function pqrs_gcb ()
    {
        return $this->hasMany(pqrs_gcb::class);
    }
    protected $fillable = [
        'name',
    ];
}
