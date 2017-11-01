<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Approval;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveApprovalController extends Controller
{
    public function update(Request $request, Application $application)
    {
        $update = $application->approvals()->where('role_id', $request->user()->role_id)->first();
        $update->notes  = $request->input('note') ? : null;
        $update->approved = $request->input('status');
        $update->is_read = true;
        $update->save();

        if ( $request->user()->role_id == $application->topAuthorizer ) {
            $application->status = $request->input('status') == 1 ? true : false;
            $application->save();
        } else {
            Approval::where('id', '<', $update->id)->where('application_id', $update->application_id)
                ->orderBy('id', 'desc')->first()->update([
                   'is_visible' => true
                ]);
        }

        return back()
            ->withSuccess("ছুটির আবেদনপত্রে আপনার মতামত প্রদান করা হয়েছে |");
    }
}
