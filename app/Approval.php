<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = [
        'application_id', 'role_id', 'notes',
        'approved', 'is_read', 'is_visible'
    ];
}
