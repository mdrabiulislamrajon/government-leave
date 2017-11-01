<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UploadService;

class UploadsController extends Controller
{
	private $service;

	public function __construct(UploadService $service)
	{
		$this->service = $service;
	}

    public function uploadProfile(Request $request)
    {
    	$this->validate($request, [
    		'profile_pic' => 'required|image'
    	]);
    	$user = $request->user();
    	if($user->profile_pic) {
    		$this->service->remove('profile/' . $user->profile_pic);
    	}
		$path = $this->service->upload($request->file('profile_pic'));
		$user->update(['profile_pic' => $path]);   
		
		return back()
			->withSuccess("আপনার প্রোফাইলের ছবি আপলোড করা হয়েছে |"); 	
    }

    public function uploadSignature()
    {
    	
    }
}
