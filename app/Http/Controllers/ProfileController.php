<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}

    public function index(Request $request)
    {
    	return view('profile.index', [
    		'profile' => $request->user()
    	]);
    }

    public function edit(Request $request)
    {
    	return view('profile.edit', [
    		'profile' => $request->user()
    	]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'fa_hu_name' => 'required|min:4',
            'mother_name' => 'required|min:4',
            'mobile' => 'required|min:11|max:11|unique:users,mobile,' . $request->user()->id,
        ]);
        $request->user()->update($request->all());
        return redirect('profile')
            ->withSuccess('আপনার প্রোফাইলের তথ্য পরিবর্তিত হয়েছে |');
    }


    public function getPassword(Request $request)
    {
        return view('profile.password', [
            'profile' => $request->user()
        ]);
    }

    public function patchPassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required|min:4'
        ]);
        $request->user()->update($request->all());
        return redirect('profile')
            ->withSuccess('আপনার লগইন পাসওয়ার্ড পরিবর্তিত হয়েছে |');
    }
}
