<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserAuthorizersController extends Controller
{
    public function create()
    {
        $user = User::find(session()->get('user_id'));
        $ancestors = $user->role->ancestors;

        return view('user.authorizer.create', compact('ancestors', 'user'));
    }

    public function store(Request $request)
    {
        if ($request->has('authorizers')) {
            $role = Role::find($request->role_id);
            $role->authorizers()->sync($request->input('authorizers'));
        }

        return redirect('user-management')
            ->withSuccess('ব্যবহারকারীর ছুটি অনুমোদনকারী তৈরী করা হয়েছে |');
    }
}
