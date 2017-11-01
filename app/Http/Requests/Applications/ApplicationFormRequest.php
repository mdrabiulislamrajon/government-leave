<?php

namespace App\Http\Requests\Applications;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Rules\ApplicationsRules;

class ApplicationFormRequest extends FormRequest
{
    private $rulesObj;

    public function __construct(ApplicationsRules $rules)
    {
        $this->rulesObj = $rules;
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
        return $this->rulesObj->rules();
    }
}
