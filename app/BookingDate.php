<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDate extends Model
{
    protected $fillable = ['booking_date', 'mechanic_id'];

    public function mechanic() {
        return $this->belongsTo(Mechanic::class);
    }
}
