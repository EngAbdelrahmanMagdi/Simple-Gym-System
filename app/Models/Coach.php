<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function training_sessions()
    {
        return $this->hasMany(TrainingSession::class);
    }

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
}
