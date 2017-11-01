<?php 

namespace App\Http\Services;

use App\Leave;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarService
{
	public function generate()
	{
		
		$results = Leave::get();
		
		return $this->parseResults($results);
	}

	private function parseResults($results)
	{
		$output = [];
		if(count($results)){
			foreach($results as $result){
				$inner = [];
				$inner['id']    = $result->id;
				$inner['title'] = $result->title;
				$inner["start"] = $result->from_date->toIso8601String();
				$inner["end"] = $result->to_date->toIso8601String();
				$output[] = $inner;
			}
		}

		return count($output) ? $output : null;
	}
}