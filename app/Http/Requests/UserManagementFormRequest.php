<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Rules\UserManagementRules as Rules;

class UserManagementFormRequest extends FormRequest
{
    private $rulesObj;

    public function __construct(Rules $rulesObj)
    {
        $this->rulesObj = $rulesObj;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = $this->rulesObj->rules($this->segment(2));

        return $rules;
    }
}
