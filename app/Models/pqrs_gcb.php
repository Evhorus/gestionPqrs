<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs_gcb extends Model
{
    use HasFactory;
    public function pqrs_subject()
    {
        return $this->belongsTo(pqrs_subject::class);
    }
    public function pqrs_type()
    {
        return $this->belongsTo(pqrs_type::class);
    }
    public function status_pqrs()
    {
        return $this->belongsTo(status_pqrs::class);
    }
    public function pqrs_tracking()
    {
        return $this->hasMany(pqrs_tracking::class);
    }
    protected $fillable = [
        'document',
        'name',
        'lastname',
        'phone',
        'email',
        'other_subject',
        'message',
        'evidence',
    ];
}
