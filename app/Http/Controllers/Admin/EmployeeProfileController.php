<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Http\Controllers\Controller;
use App\Http\Filters\ApplicationFilter;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeProfileController extends Controller
{
    public function show(User $user, Request $request, ApplicationFilter $filters)
    {
        $start = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . '-01-01');
        $end  = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . '-12-31');

        $leaves = Application::filter($filters)
                ->whereBetween('start_date', [$start, $end])
                ->orderBy('start_date', 'desc')
                ->where('user_id', $user->id)
                ->get();

        return view('admin.employee.show', [
            'profileUser' => $user,
            'leaves'      => $leaves
        ]);
    }

    public function report(User $user, Request $request)
    {
        $start = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . ' -01-01');
        $end  = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . '-12-31');

        $leaves = Application::whereBetween('start_date', [$start, $end])
                ->orderBy('start_date', 'desc')
                ->where('user_id', $user->id)
                ->get();

        return view('admin.employee.leaves', [
            'profileUser' => $user,
            'leaves'      => $leaves
        ]);
    }
}
