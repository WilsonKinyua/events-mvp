<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'gender' => [
                'required',
            ],
            'designation' => [
                'string',
                'required',
            ],
            'organisation' => [
                'string',
                'required',
            ],
            'state' => [
                'string',
                'nullable',
            ],
            'city_town' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'interests.*' => [
                'integer',
            ],
            'interests' => [
                'array',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
        ];
    }
}
