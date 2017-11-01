<?php

namespace App\Http\Services;

use App\Role;

class RolesService
{
    public function get()
    {
        return Role::get()->toTree();
    }
}
