<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Event Settings
    Route::post('event-settings/media', 'EventSettingsApiController@storeMedia')->name('event-settings.storeMedia');
    Route::apiResource('event-settings', 'EventSettingsApiController');

    // Companies
    Route::post('companies/media', 'CompaniesApiController@storeMedia')->name('companies.storeMedia');
    Route::apiResource('companies', 'CompaniesApiController');

    // Interests
    Route::apiResource('interests', 'InterestsApiController');

    // Posts
    Route::post('posts/media', 'PostsApiController@storeMedia')->name('posts.storeMedia');
    Route::apiResource('posts', 'PostsApiController');

    // Comments
    Route::apiResource('comments', 'CommentsApiController');
});
