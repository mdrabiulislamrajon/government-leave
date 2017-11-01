<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesManagementController extends Controller
{
    public function index()
    {
        $roles = Role::get()->toTree();

        return view('settings.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('settings.roles.create');
    }

    public function store(Request $request)
    {
        $role = Role::create($request->only('name', 'text', 'parent_id'));

        return redirect()->route('roles.authorizations.create', [$role])
            ->withSuccess('নতুন পদবি সফলভাবে তৈরী করা হয়েছে |');
    }

    public function edit(Role $role)
    {
        return view('settings.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        return redirect()->route('roles.index')
            ->withSuccess('`' . $role->text . '` পদমর্যাদার তথ্য পরিবর্তন করা হয়েছে |');
    }
}
