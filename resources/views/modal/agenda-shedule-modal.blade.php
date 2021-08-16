<div class="modal fade" id="eventSheduleModal" tabindex="-1" role="dialog" aria-labelledby="eventSheduleModal">
    <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{ trans('global.create') }} Event Program Date
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.agenda-dates.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="required" for="date">{{ trans('cruds.agendaDate.fields.date') }}</label>
                        <input class="form-control  {{ $errors->has('date') ? 'is-invalid' : '' }}" type="date"
                            name="agenda_date" id="date" value="{{ old('date') }}" required>
                        @if ($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.agendaDate.fields.date_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">
                            {{ trans('global.add') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
