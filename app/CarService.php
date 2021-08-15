<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarService extends Model
{
    //
    protected $fillable = ['name'];

    public function serviceTypes() {
        return $this->hasMany(ServiceType::class);
    }
}
