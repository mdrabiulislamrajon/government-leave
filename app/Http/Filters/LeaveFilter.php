<?php

namespace App\Http\Filters;

use App\Http\Filters\QueryFilter;

class LeaveFilter extends QueryFilter
{
	public function year($year)
	{
		return $this->builder->where('year', $year);
	}
}