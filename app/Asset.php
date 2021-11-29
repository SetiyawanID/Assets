<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name', 'user_id', 'asset_tag', 'brand_id', 'location_id', 'serial_number', 'type_id',
        'cost', 'purchase_date', 'warranty', 'description', 'picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function typeAsset()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
