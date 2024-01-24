<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nom',
        'description', 'budget',
        'date_debut', 'date_fin',
        'statut'
    ];
}
