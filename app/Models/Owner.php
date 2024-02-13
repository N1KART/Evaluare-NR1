<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'car_id'
    ];
    public function user():BelongsTo {
        return $this->belongsTo(Car::class);}
    
}
