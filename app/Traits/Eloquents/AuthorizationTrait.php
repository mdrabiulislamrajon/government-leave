<?php

namespace App\Traits\Eloquents;

use App\Role;

trait AuthorizationTrait
{
    /**
     * Role belongs to many Roles to Authorize.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authorizers()
    {
        return $this->belongsToMany('App\Role', 'authorizations', 'role_id', 'authorizer_id');
    }

    /**
     * Role belongs to many Authorizer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'authorizations', 'authorizer_id', 'role_id');
    }

    public function hasAuthorization()
    {
        return $this->children->count() ? true : false;
    }

  


}
