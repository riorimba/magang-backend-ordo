<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'rating',
        'name',
        'comment',
        'car_id',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
