<div class="modal fade events" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3>
                    {{ trans('global.add') }} {{ trans('cruds.attendee.title_singular') }}
                </h3>
                <hr>
                <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                    name="name" id="name" value="{{ old('name', '') }}" required>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">{{ trans('cruds.user.fields.gender') }}</label>
                                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                    name="gender" id="gender" required>
                                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>
                                        {{ trans('global.pleaseSelect') }}</option>
                                    @foreach (App\Models\User::GENDER_SELECT as $key => $label)
                                        <option value="{{ $key }}"
                                            {{ old('gender', '') === (string) $key ? 'selected' : '' }}>
                                            {{ $label }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('gender'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('gender') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.gender_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required"
                                    for="designation">{{ trans('cruds.user.fields.designation') }}</label>
                                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                                    type="text" name="designation" id="designation"
                                    value="{{ old('designation', '') }}" required>
                                @if ($errors->has('designation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('designation') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.designation_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required"
                                    for="organisation">{{ trans('cruds.user.fields.organisation') }}</label>
                                <input class="form-control {{ $errors->has('organisation') ? 'is-invalid' : '' }}"
                                    type="text" name="organisation" id="organisation"
                                    value="{{ old('organisation', '') }}" required>
                                @if ($errors->has('organisation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('organisation') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.organisation_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required"
                                    for="password">{{ trans('cruds.user.fields.password') }}</label>
                                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    type="password" name="password" id="password" required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                                <label for="state">{{ trans('cruds.user.fields.state') }}</label>
                                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', '') }}">
                                @if ($errors->has('state'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('state') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.state_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="city_town">{{ trans('cruds.user.fields.city_town') }}</label>
                                <input class="form-control {{ $errors->has('city_town') ? 'is-invalid' : '' }}" type="text" name="city_town" id="city_town" value="{{ old('city_town', '') }}">
                                @if ($errors->has('city_town'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('city_town') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.city_town_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="website">{{ trans('cruds.user.fields.website') }}</label>
                                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', '') }}">
                                @if ($errors->has('website'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('website') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.website_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ trans('cruds.user.fields.country') }}</label>
                                <select class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country" id="country">
                                    <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                    @foreach (App\Models\User::COUNTRY_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('country', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('country'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('country') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.country_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ trans('cruds.user.fields.industry') }}</label>
                                <select class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" name="industry" id="industry">
                                    <option value disabled {{ old('industry', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                    @foreach (App\Models\User::INDUSTRY_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('industry', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('industry'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('industry') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.industry_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="about">{{ trans('cruds.user.fields.about') }}</label>
                                <textarea class="form-control {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about">{{ old('about') }}</textarea>
                                @if ($errors->has('about'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('about') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.about_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="avatar">{{ trans('cruds.user.fields.avatar') }}</label>
                                <div class="needsclick dropzone {{ $errors->has('avatar') ? 'is-invalid' : '' }}" id="avatar-dropzone">
                                </div>
                                @if ($errors->has('avatar'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('avatar') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.user.fields.avatar_helper') }}</span>
                            </div> --}}

                    <div class="form-group">
                        <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                        <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all"
                                style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all"
                                style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}"
                            name="roles[]" id="roles" multiple required>
                            @foreach ($roles as $id => $role)
                                <option value="{{ $id }}"
                                    {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('roles'))
                            <div class="invalid-feedback">
                                {{ $errors->first('roles') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">
                            {{ trans('global.add') }} {{ trans('cruds.attendee.title_singular') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
