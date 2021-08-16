@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.eventSchedule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.id') }}
                        </th>
                        <td>
                            {{ $eventSchedule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.event_program_date') }}
                        </th>
                        <td>
                            {{ $eventSchedule->event_program_date->agenda_date ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.time_start') }}
                        </th>
                        <td>
                            {{ $eventSchedule->time_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.time_end') }}
                        </th>
                        <td>
                            {{ $eventSchedule->time_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.topic') }}
                        </th>
                        <td>
                            {{ $eventSchedule->topic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.description') }}
                        </th>
                        <td>
                            {{ $eventSchedule->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSchedule.fields.speakers') }}
                        </th>
                        <td>
                            @foreach($eventSchedule->speakers as $key => $speakers)
                                <span class="label label-info">{{ $speakers->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection