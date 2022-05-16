<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nicolaslopezj\Searchable\SearchableTrait;

class Reservation extends Model
{
    use HasFactory, SearchableTrait;

    protected $guarded = [];
    protected $dates = ['date'];

    protected $searchable = [
        'columns' => [
            'reservations.date' => 10,
            'patients.name' => 10,
        ],
        'joins' => [
            'patients' => ['patients.id', 'reservations.patient_id'],
        ],
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
