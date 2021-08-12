<?php

namespace App\Http\Requests;

use App\Models\AgendaDate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAgendaDateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('agenda_date_create');
    }

    public function rules()
    {
        return [
            'agenda_date' => [
                'required',
                // 'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
