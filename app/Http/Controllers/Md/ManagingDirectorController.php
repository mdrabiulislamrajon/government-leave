<?php

namespace App\Http\Controllers\Md;

use App\Application;
use App\Http\Controllers\Controller;
use App\Http\Filters\ApplicationFilter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManagingDirectorController extends Controller
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
                ->get();

               
              

        return view('md.index', compact('leaves'));
    }

 
}
