<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Mechanic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name'
    ];
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
