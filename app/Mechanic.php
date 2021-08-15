<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    //
    public function bookingDates() {
        return $this->hasMany(BookingDate::class);
    }
}
