<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'description'];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
