<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fa_hu_name', 'mother_name', 'profile_pic',
        'signature', 'mobile', 'role_id', 'password', 'type',
        'active', 'gender', 'join_date', 'div_br_off'
    ];

    protected $dates = [
        'join_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Mutator for Storing password
     * @param [type] $value [description]
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setJoinDateAttribute($value)
    {
        $this->attributes['join_date'] = Carbon::parse($value);
    }

    public function avatar()
    {
        $avatar = $this->profile_pic ? : 'avatar-' . $this->gender . '.png';

        return 'uploads/profile/' . $avatar;
    }

    public function signature()
    {
        $signature = $this->signature ? : 'default.png';

        return 'uploads/signature/' . $signature;
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * User belongs to Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
