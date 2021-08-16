@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.eventSchedule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.event-schedules.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="event_program_date_id">{{ trans('cruds.eventSchedule.fields.event_program_date') }}</label>
                <select class="form-control select2 {{ $errors->has('event_program_date') ? 'is-invalid' : '' }}" name="event_program_date_id" id="event_program_date_id" required>
                    @foreach($event_program_dates as $id => $entry)
                        <option value="{{ $id }}" {{ old('event_program_date_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('event_program_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_program_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.event_program_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="time_start">{{ trans('cruds.eventSchedule.fields.time_start') }}</label>
                <input class="form-control timepicker {{ $errors->has('time_start') ? 'is-invalid' : '' }}" type="text" name="time_start" id="time_start" value="{{ old('time_start') }}" required>
                @if($errors->has('time_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.time_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="time_end">{{ trans('cruds.eventSchedule.fields.time_end') }}</label>
                <input class="form-control timepicker {{ $errors->has('time_end') ? 'is-invalid' : '' }}" type="text" name="time_end" id="time_end" value="{{ old('time_end') }}" required>
                @if($errors->has('time_end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time_end') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.time_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="topic">{{ trans('cruds.eventSchedule.fields.topic') }}</label>
                <input class="form-control {{ $errors->has('topic') ? 'is-invalid' : '' }}" type="text" name="topic" id="topic" value="{{ old('topic', '') }}" required>
                @if($errors->has('topic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('topic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.topic_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.eventSchedule.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="speakers">{{ trans('cruds.eventSchedule.fields.speakers') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('speakers') ? 'is-invalid' : '' }}" name="speakers[]" id="speakers" multiple>
                    @foreach($speakers as $id => $speaker)
                        <option value="{{ $id }}" {{ in_array($id, old('speakers', [])) ? 'selected' : '' }}>{{ $speaker }}</option>
                    @endforeach
                </select>
                @if($errors->has('speakers'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speakers') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventSchedule.fields.speakers_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection