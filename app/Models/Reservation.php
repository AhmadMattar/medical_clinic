<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['date'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
