<?php

namespace App\Http\Requests;

use App\Models\EventSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_setting_create');
    }

    public function rules()
    {
        return [
            'event_name' => [
                'string',
                'required',
            ],
            'event_logo' => [
                'required',
            ],
            'about' => [
                'required',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'youtube' => [
                'string',
                'nullable',
            ],
            'sliders.*' => [
                'required',
            ],
        ];
    }
}
