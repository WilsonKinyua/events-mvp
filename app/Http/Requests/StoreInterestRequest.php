<?php

namespace App\Http\Requests;

use App\Models\Interest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInterestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('interest_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
