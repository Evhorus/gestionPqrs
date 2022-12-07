<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qprs_tracking extends Model
{
    use HasFactory;
    public function pqrs_gcb()
    {
        return $this->belongsTo(pqrs_gcb::class);
    }
    protected $fillable = [
        'message_tracking',
        'observation_tracking',
        'evidence',
    ];
}
