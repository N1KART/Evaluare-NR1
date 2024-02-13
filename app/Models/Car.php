<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'model',
        'mechanic_id'
    ];
    public function owner():BelongsTo {
        return $this->belongsTo(Owner::class);
    }
    public function mechanic(): HasOne
    {
        return $this->hasOne(Mechanic::class);
    }
}
