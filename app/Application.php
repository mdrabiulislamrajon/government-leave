<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $appends = [
        'topAuthorizer'
    ];

    protected $fillable = [
        'user_id', 'type_id', 'reason', 'no_of_days', 'start_date',
        'end_date', 'vacation_address', 'status'
    ];

    /**
     * Cast dates into Carbon Object
     *
     * @var [type]
     */
    protected $dates = [
        'start_date', 'end_date'
    ];

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    /**
     * Vacation Starting Date Mutator
     *
     * @param [type]
     */
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = Carbon::parse($value);
    }

    /**
     * Vacation Ending Date Mutator
     *
     * @param [type]
     */
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Application has many Approvals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }

    public function hasPermissionToApprove()
    {
        return $this->approvals()->where('role_id', auth()->user()->role_id)->where('is_visible', true)
            ->where('approved', false)->count() ? true : false;
    }
    
    public function getTopAuthorizerAttribute()
    {
        $this->load('user.role');

        return $this->user->role->authorizers()->first()->id;
    }
}
