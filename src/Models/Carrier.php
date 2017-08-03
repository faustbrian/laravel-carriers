<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Carriers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Carriers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Carrier extends Model
{
    /**
     * @var string
     */
    protected $table = 'carriers';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeMcc(Builder $query, $value)
    {
        return $query->where('mcc', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeMnc(Builder $query, $value)
    {
        return $query->where('mnc', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeIso(Builder $query, $value)
    {
        return $query->where('iso', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCountryName(Builder $query, $value)
    {
        return $query->where('country_name', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCountryCode(Builder $query, $value)
    {
        return $query->where('country_code', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeNetwork(Builder $query, $value)
    {
        return $query->where('network', '=', $value);
    }
}
