<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'name',
        'type',
        'price',
        'year',
        'manufacture_id'
    ];

    public function manufacture()
    {
        return $this->hasOne(Manufacture::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
