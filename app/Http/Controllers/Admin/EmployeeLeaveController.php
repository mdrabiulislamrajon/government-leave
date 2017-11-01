<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\ApplicationFilter;
use App\Role;
use App\User;
use App\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeLeaveController extends Controller
{
    public function index(Request $request, ApplicationFilter $filters)
    {
        $roleId    = $request->user()->role_id;

        $start = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . '-01-01');
        $end  = Carbon::parse(($request->has('year') ? $request->year : date('Y')) . '-12-31');

        $leaves = Application::filter($filters)
                ->whereBetween('start_date', [$start, $end])
                ->orderBy('created_at', 'desc')
                ->with('user', 'approvals')
                ->whereHas('approvals', function ($query) use ($roleId) {
                    $query->where('role_id', $roleId);
                })
                ->get();

        return view('admin.applications.index', compact('leaves'));
    }
}
