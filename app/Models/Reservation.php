<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description',
        'date_reservation',
        'date_retour',
        'user_id',
        'book_id',
        
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
