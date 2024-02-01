<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'couverture',
        'titre',
        'genre',
        'description',
        'date_publication',
        'total_copies',
        'copies_dispo',
        'deleted_at',
        'updated_at',
        'created_at',
    ]; 
}
