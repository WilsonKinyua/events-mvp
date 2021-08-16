<?php

namespace App\Http\Requests;

use App\Models\EventSchedule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEventScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_schedule_edit');
    }

    public function rules()
    {
        return [
            'event_program_date_id' => [
                'required',
                'integer',
            ],
            'time_start' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'time_end' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'topic' => [
                'string',
                'required',
                'unique:event_schedules,topic,' . request()->route('event_schedule')->id,
            ],
            'speakers.*' => [
                'integer',
            ],
            'speakers' => [
                'array',
            ],
        ];
    }
}
