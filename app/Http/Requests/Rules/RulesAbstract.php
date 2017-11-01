<?php 

namespace App\Http\Requests\Rules;

use Illuminate\Http\Request;

abstract class RulesAbstract
{
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	protected function requests()
	{
		return $this->request->all();
	}
}

