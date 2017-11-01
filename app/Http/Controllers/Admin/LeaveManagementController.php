<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\LeaveFilter;
use App\Http\Requests\LeaveManagementFormRequest;
use App\Leave;
use Illuminate\Http\Request;

class LeaveManagementController extends Controller
{
    public function index(Request $request, LeaveFilter $filters)
    {
        if ($request->has('year')) {
            $leaves = Leave::filter($filters)->orderBy('from_date')->get();
        } else {
            $leaves = Leave::where('year', date('Y'))->orderBy('from_date')->get();
        }

        return view('settings.leave.index', compact('leaves'));
    }

    public function create()
    {
        return view('settings.leave.create');
    }

    public function store(LeaveManagementFormRequest $request)
    {
        Leave::create($request->all());

        return redirect('settings/leave')
            ->withSuccess('নতুন ছুটি যুক্ত করা হয়েছে |');
    }

    public function edit(Leave $leave)
    {
        return view('settings.leave.edit', compact('leave'));
    }

    public function update(LeaveManagementFormRequest $request, Leave $leave)
    {
        $leave->update($request->all());

        return redirect('settings/leave')
            ->withSuccess('ছুটির তথ্য পরিবর্তন করা হয়েছে |');
    }

    public function destroy(Leave $leave)
    {
        $leave->delete();

        return redirect('settings/leave')
            ->withSuccess('ছুটির তথ্য ডিলিট করা হয়েছে |');
    }
}
