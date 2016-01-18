<?php

namespace DraperStudio\Carriers\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    protected $table = 'carriers';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopeMcc(Builder $query, $value)
    {
        return $query->where('mcc', '=', $value);
    }

    public function scopeMnc(Builder $query, $value)
    {
        return $query->where('mnc', '=', $value);
    }

    public function scopeIso(Builder $query, $value)
    {
        return $query->where('iso', '=', $value);
    }

    public function scopeCountryName(Builder $query, $value)
    {
        return $query->where('country_name', '=', $value);
    }

    public function scopeCountryCode(Builder $query, $value)
    {
        return $query->where('country_code', '=', $value);
    }

    public function scopeNetwork(Builder $query, $value)
    {
        return $query->where('network', '=', $value);
    }
}
