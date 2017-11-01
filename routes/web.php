<?php

Route::get('/', function () {
    return redirect('login');
});

Route::get('/role', function () {
    // $role = new \App\Role;
    // $role->name = 'Secretary';
    // $role->text = 'সেক্রেটারি';
    // $role->parent_id = 1;
    // $role->save();

    // return $role;
});


// Auth Routes
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

 

Route::group(['middleware' => ['auth']], function () {

    // Logged In User Profile

    Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/edit', 'ProfileController@edit');
    Route::patch('/profile/edit', 'ProfileController@update');
    Route::get('/profile/password', 'ProfileController@getPassword');
    Route::patch('/profile/password', 'ProfileController@patchPassword');

    // Uploads
    Route::post('/profile/upload', 'UploadsController@uploadProfile');
    Route::post('/signature/upload', 'UploadsController@uploadSignature');

    // Logged in user applications
    Route::get('/profile/applications', 'LeaveApplicationsController@index');
    Route::get('/profile/applications/{application}', 'LeaveApplicationsController@show');
    Route::get('/profile/leave', 'LeaveApplicationsController@leaves');

    // Apply for Leave
    Route::get('/apply', 'ApplyController@create');
    Route::post('/apply', 'ApplyController@store');
});

//Reatrict for only MD

Route::group(['namespace' => 'Md', 'middleware' => ['auth', 'md']],function(){
    Route::get('md', 'ManagingDirectorController@index');
});

// Restrict for Admin Only
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/user-management/roles', 'UserAuthorizersController@create');
    Route::post('/user-management/roles', 'UserAuthorizersController@store');
    Route::resource('/user-management', 'UserManagementController');
    Route::resource('admin/leaves', 'EmployeeLeaveController');
    Route::get('employee/{user}/leaves', 'EmployeeProfileController@show');
    Route::get('employee/{user}/reports', 'EmployeeProfileController@report');
    Route::post('admin/applications/approval/{application}', 'LeaveApprovalController@update');

    // Notifications
    Route::get('/notifications', 'NotificationsController@index');

    // Settings Management
    Route::group(['middleware' => ['auth', 'admin']], function () {
        Route::resource('/settings/leave', 'LeaveManagementController');
        Route::get('settings/roles', 'Roles\RolesManagementController@index')->name('roles.index');
        Route::get('settings/roles/create', 'Roles\RolesManagementController@create')->name('roles.create');
        Route::post('settings/roles/{role}/authorizations/create', 'Roles\AuthorizationsController@store')->name('roles.authorizations.store');
        Route::get('settings/roles/{role}/authorizations/create', 'Roles\AuthorizationsController@create')->name('roles.authorizations.create');
        Route::get('settings/roles/{role}/authorizations/edit', 'Roles\AuthorizationsController@edit')->name('roles.authorizations.edit');
        Route::patch('settings/roles/{role}/authorizations/edit', 'Roles\AuthorizationsController@update')->name('roles.authorizations.update');
        Route::post('settings/roles', 'Roles\RolesManagementController@store')->name('roles.store');
        Route::get('settings/roles/{role}/edit', 'Roles\RolesManagementController@edit');
        Route::patch('settings/roles/{role}', 'Roles\RolesManagementController@update')->name('roles.update');
    });
});

Route::group(['namespace' => 'Applicant'], function () {
    Route::resource('applications', 'ApplicationsController');
});

Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/test', function(Illuminate\Http\Request $request){
    
    //dd(getHostByName(getHostName()));
});
