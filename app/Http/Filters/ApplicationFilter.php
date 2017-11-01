<?php 

namespace App\Http\Filters;

use App\Http\Filters\QueryFilter;

class ApplicationFilter extends QueryFilter
{
	public function type($type = null)
	{
		return $this->builder->where('type_id', $type);
	}

	public function status($status)
	{
		return $this->builder->where('status', $status);
	}
}