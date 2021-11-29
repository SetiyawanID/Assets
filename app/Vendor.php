<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['name', 'address', 'phone_number', 'email'];

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
