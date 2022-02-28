<?php
// Route::redirect('/', '/login');
Route::get('/', 'HomepageController@welcome', 301);

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

// set password
Route::get('user/set/password/{token}','HomepageController@setPassword')->name('user.set.password');
Route::post('set/password','HomepageController@createPassword')->name('user.set.password.create');

Auth::routes();

Route::group(['prefix' => 'app', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // attendee
    Route::get('attendee', 'AttendeeController@index')->name('view.attendee');

    // meetings
    Route::get('meeting', 'MeetingController@index')->name('view.meeting');

    // meetings
    Route::get('newsroom', 'NewsroomController@index')->name('view.newsroom');

    // speakers 
    Route::get('speaker', 'SpeakerController@index')->name('view.speaker');

    // delegates
    Route::get('delegate', 'DelegateController@index')->name('view.delegate');
    Route::get('delegate/{id}/delete', 'DelegateController@destroy')->name('delete.delegate');

    // event feed tab
    Route::get('feed', 'EventFeedController@index')->name('view.event-feed');

    // agenda
    Route::get('agenda', 'AgendaController@index')->name('view.agenda');
    Route::get('agenda/{id}', 'AgendaController@showAgendaDateSchedules')->name('show.agenda-schedule');


    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
    Route::resource('users', 'UsersController');

    // Task Status
    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');
    Route::resource('task-statuses', 'TaskStatusController');

    // Task Tag
    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');
    Route::resource('task-tags', 'TaskTagController');

    // Task
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');
    Route::post('tasks/ckmedia', 'TaskController@storeCKEditorImages')->name('tasks.storeCKEditorImages');
    Route::resource('tasks', 'TaskController');

    // Tasks Calendar
    Route::resource('tasks-calendars', 'TasksCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Event Settings
    Route::delete('event-settings/destroy', 'EventSettingsController@massDestroy')->name('event-settings.massDestroy');
    Route::post('event-settings/media', 'EventSettingsController@storeMedia')->name('event-settings.storeMedia');
    Route::post('event-settings/ckmedia', 'EventSettingsController@storeCKEditorImages')->name('event-settings.storeCKEditorImages');
    Route::resource('event-settings', 'EventSettingsController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::post('companies/ckmedia', 'CompaniesController@storeCKEditorImages')->name('companies.storeCKEditorImages');
    Route::post('companies/parse-csv-import', 'CompaniesController@parseCsvImport')->name('companies.parseCsvImport');
    Route::post('companies/process-csv-import', 'CompaniesController@processCsvImport')->name('companies.processCsvImport');
    Route::resource('companies', 'CompaniesController');

    // Interests
    Route::delete('interests/destroy', 'InterestsController@massDestroy')->name('interests.massDestroy');
    Route::post('interests/parse-csv-import', 'InterestsController@parseCsvImport')->name('interests.parseCsvImport');
    Route::post('interests/process-csv-import', 'InterestsController@processCsvImport')->name('interests.processCsvImport');
    Route::resource('interests', 'InterestsController');

    // Posts
    Route::delete('posts/destroy', 'PostsController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostsController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostsController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostsController');

    // Comments
    Route::delete('comments/destroy', 'CommentsController@massDestroy')->name('comments.massDestroy');
    Route::resource('comments', 'CommentsController');

    // Agenda Dates
    Route::delete('agenda-dates/destroy', 'AgendaDatesController@massDestroy')->name('agenda-dates.massDestroy');
    Route::resource('agenda-dates', 'AgendaDatesController');

    // Event Schedule
    Route::delete('event-schedules/destroy', 'EventScheduleController@massDestroy')->name('event-schedules.massDestroy');
    Route::resource('event-schedules', 'EventScheduleController');

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
