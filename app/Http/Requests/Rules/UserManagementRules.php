<?php

namespace App\Http\Requests\Rules;

use App\Http\Requests\Rules\RulesAbstract;

class UserManagementRules extends RulesAbstract
{
    public function rules($id = null)
    {
        $rules = [
            'name' => 'required|min:4',
            'fa_hu_name' => 'required|min:4',
            'mother_name' => 'required|min:4',
            'mobile' => 'required|min:11|max:11|unique:users,mobile',
            'gender' => 'required',
            'div_br_off' => 'required',
            'role_id' => 'required|exists:roles,id',
            'join_date'   => 'required|date'
        ];

        if ($id) {
            $rules['mobile'] = 'required|min:11|max:11|unique:users,mobile,' . $id;
        } else {
            $rules['profile_pic'] = 'nullable|image';
            $rules['signature'] = 'nullable|image';
            $rules['password'] = 'required|min:5|confirmed';
            $rules['password_confirmation'] ='required';
        }

        return $rules;
    }
}
