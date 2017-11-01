<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Filters\ApplicationFilter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaveApplicationsController extends Controller
{
    public function index(Request $request, ApplicationFilter $filters)
    {
    	$start = Carbon::parse( ($request->has('year') ? $request->year : date('Y')) . '-01-01');
    	$end  = Carbon::parse( ($request->has('year') ? $request->year : date('Y')) . '-12-31');

    	$leaves = Application::filter($filters)
    	        ->whereBetween('start_date', [$start, $end])
    	        ->orderBy('start_date', 'desc')
    	        ->where('user_id', $request->user()->id)
    	        ->get();

        return view('profile.leaves.index', compact('leaves'));
    }

    public function show(Application $application)
    {
        return view('profile.leaves.show', compact('application'));
    }

    public function leaves(Request $request)
    {
    	$start = Carbon::parse( ($request->has('year') ? $request->year : date('Y')) . '-01-01');
    	$end  = Carbon::parse( ($request->has('year') ? $request->year : date('Y')) . '-12-31');

    	$leaves = Application::whereBetween('start_date', [$start, $end])
    	        ->orderBy('start_date', 'desc')
    	        ->where('user_id', $request->user()->id)
    	        ->get();

    	return view('profile.leaves.leaves', [
    		'leaves' => $leaves
    	]);
    }
}
