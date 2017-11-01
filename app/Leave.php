<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = [
    	'title', 'from_date', 'to_date', 'year'
    ];

    protected $dates = [
    	'from_date', 'to_date'
    ];

    public function setFromDateAttribute($value)
    {
        $this->attributes['from_date'] = Carbon::parse($value);
    }

    public function setToDateAttribute($value)
    {
        $this->attributes['to_date'] = Carbon::parse($value);
    }

    public function scopefilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
