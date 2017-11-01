<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserManagementFormRequest;
use App\User;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->with('role')->get();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::latest()->with('role')->get();

        return view('user.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserManagementFormRequest $request)
    {
        $user = User::create($request->all());
        session()->put('user_id', $user->id);

        return redirect('user-management/roles')
            ->withSuccess('নতুন ব্যবহারকারী যোগ কৰা হয়েছে |');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user_management)
    {
        $user_management->load('role');

        return view('admin.employee.show', [
L        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user_management)
    {
        return view('user.edit', ['user' => $user_management]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserManagementFormRequest $request, User $user_management)
    {
        $user_management->update($request->all());

        return redirect('user-management/' . $user_management->id)
            ->withSuccess('Employee info. updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user_management
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user_management)
    {
        $user_management->delete();

        return redirect('user-management')
            ->withSuccess('ব্যবহারকারীর তথ্য ডিলিট করা হয়েছে |');
    }
}
