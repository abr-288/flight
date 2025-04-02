<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Ajoutez cette ligne
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory; // Ajoutez cette ligne
    
    protected $fillable = [
        'name',
        'origin', 
        'destination',
        'departure',
        'arrival'
    ];
}