<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorizationsController extends Controller
{
    public function create(Role $role)
    {
        $parents = $role->ancestors;

        return view('settings.roles.authorizations.create', compact('parents'));
    }

    public function store(Request $request, Role $role)
    {
        $role->authorizers()->sync($request->input('authorizer_id'));

        return redirect()->route('roles.index')
            ->withSuccess('নতুন পদবি এবং অনুমোদনকারী কর্মকর্তাবৃন্দের পদবি সেভ করা হলো');
    }

    public function edit(Role $role)
    {
        $parents = $role->ancestors;
        $role->load('authorizers');

        return view('settings.roles.authorizations.edit', compact('role', 'parents'));
    }

    public function update(Request $request, Role $role)
    {
        $role->authorizers()->sync($request->input('authorizer_id'));

        return redirect()->route('roles.index')
            ->withSuccess('নতুন পদবি এবং অনুমোদনকারী কর্মকর্তাবৃন্দের পদবি সেভ করা হলো');
    }
}
