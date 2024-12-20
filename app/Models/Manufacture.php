<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    protected $table = 'manufactures';

    protected $fillable = [
        'name',
        'address',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
