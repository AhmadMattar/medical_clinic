<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SearchableTrait;
    protected $guarded = [];

    protected $searchable = [
        'columns' => [
            'patients.name' => 10,
            'patients.phone' => 10,
            'patients.identity_number' => 10,
        ],
    ];

    public function treatmentState(){
        return $this->treatment_state ? 'Complete' : 'Not complete';
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
