<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergyBoost extends Model
{
    protected $fillable = [
    'activity_name',
    'description',
    'energy_type',
    'duration_minutes',
    'best_time'
];
}
