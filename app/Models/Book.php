<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'couverture',
        'titre',
        'genre',
        'description',
        'date_publication',
        'total_copies',
        'copies_dispo',
    
    ]; 

    public function reservations()
    {
     return $this->hasMany(Reservation::class);
    }
}
