@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.eventSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $eventSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.event_name') }}
                        </th>
                        <td>
                            {{ $eventSetting->event_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.event_logo') }}
                        </th>
                        <td>
                            @if($eventSetting->event_logo)
                                <a href="{{ $eventSetting->event_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $eventSetting->event_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.about') }}
                        </th>
                        <td>
                            {{ $eventSetting->about }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.facebook') }}
                        </th>
                        <td>
                            {{ $eventSetting->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.twitter') }}
                        </th>
                        <td>
                            {{ $eventSetting->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $eventSetting->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.instagram') }}
                        </th>
                        <td>
                            {{ $eventSetting->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.youtube') }}
                        </th>
                        <td>
                            {{ $eventSetting->youtube }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventSetting.fields.sliders') }}
                        </th>
                        <td>
                            @foreach($eventSetting->sliders as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection