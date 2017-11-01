<?php

namespace App\Http\Controllers;

use App\Http\Requests\Applications\ApplicationFormRequest;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create(Request $request)
    {
        $authorizers = $request->user()->role->authorizers;

        return view('applications.create', compact('authorizers'));
    }

    public function store(ApplicationFormRequest $request)
    {
        $authorizer = $request->user()->load('role.authorizers');
        $roles = $authorizer->role->authorizers;

        $application = $request->user()->applications()->create($request->all());
        foreach ($roles as $role) {
            if ($role === $roles->last()) {
                $application->approvals()->create([
                    'role_id' => $role->id,
                    'is_visible' => true
                ]);
            } else {
                $application->approvals()->create(['role_id' => $role->id]);
            }
        }

        return redirect('profile/applications')
            ->withSuccess('Submit Your Leave Application');
    }
}
