<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                // 'required',
                // 'unique:posts',
            ],
            'body' => [
                'required',
            ],
            'created_by_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
