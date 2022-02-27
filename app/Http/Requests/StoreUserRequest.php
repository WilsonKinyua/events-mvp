<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
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
                'unique:users',
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
            'password' => [
                'string',
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
