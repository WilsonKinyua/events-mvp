<?php

namespace App\Http\Requests;

use App\Models\AgendaDate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAgendaDateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('agenda_date_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:agenda_dates,id',
        ];
    }
}
