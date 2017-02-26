<?php


Route::get('/', function () {
    return view('auth/login');
});

Route::get('php-version', function () {
    return phpinfo();
});

Route::get('laravel-version', function () {
    $laravel = app();
    return 'Your Laravel Version is ' . $laravel::VERSION;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::auth();
Route::get('changepasswordpage', 'Auth\AuthController@showUpdatePassword');
Route::post('change-password', 'Auth\AuthController@updatePassword');

Route::get('/home', 'HomeController@index');

Route::get('apartment/update/{id}', 'ApartmentsController@edit');
Route::get('apartment/update information/{id}', 'ApartmentsController@update');
Route::resource('/apartment', 'ApartmentsController');

Route::get('center/update/{id}', 'CenterController@edit');
Route::get('center/update information/{id}', 'CenterController@update');
Route::resource('/center', 'CenterController');

Route::get('rescontact/update/{id}', 'RescontactsController@edit');
Route::get('rescontact/update information/{id}', 'RescontactsController@update');
Route::resource('/rescontact', 'RescontactsController');

Route::get('/resident/update/{id}', 'ResidentsController@edit');
Route::get('/resident/update information/{id}', 'ResidentsController@update');
Route::resource('/resident','ResidentsController');

Route::get('commonarea/update/{id}', 'CommonareaController@edit');
Route::get('commonarea/update information/{id}', 'CommonareaController@update');
Route::resource('/commonarea', 'CommonareaController');

Route::get('/Supply/update/{id}', 'SupplyController@edit');
Route::get('/Supply/update information/{id}', 'SupplyController@update');
Route::resource('/Supply','SupplyController');

Route::get('/tool/update/{id}', 'ToolsController@edit');
Route::get('/tool/update information/{id}', 'ToolsController@update');
Route::resource('/tool','ToolsController');

Route::get('/issuetype/update/{id}', 'IssuetypesController@edit');
Route::get('/issuetype/update information/{id}', 'IssuetypesController@update');
Route::resource('/issuetype','IssuetypesController');


Route::resource('users', 'UsersController');
Route::resource('roles', 'RolesController');

Route::resource('/workorder', 'WorkOrderController@index');
Route::resource('/workorderview', 'WorkOrderController@view');

/*    Route::get('/redirect', 'SocialAuthController@redirect');
    Route::get('/callback', 'SocialAuthController@callback');*/


Route::get('/reset', 'Auth\AuthController@showPasswordEmailPage');

Route::get('/createPassword/{id}', 'Auth\PasswordController@showUserPasswordChange');

Route::post('/createNewPassword', 'Auth\PasswordController@createNewPassword');


Route::post('/sendemail', function () {

    session_start();
    $user_id = DB::table('users')->where('email', $_POST['email'])->value('id');

    if ($user_id != null) {
        $data = array(
            'name' => $_POST['email'],
        );

        $_SESSION['user_id'] = $user_id;

        error_log('Value of User ID for email password reset - ' . $user_id);

        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('newcassel@domain.com', 'New Cassel Work Order System');
            $message->to($_POST['email'])->subject('Password Setup');

        });

        return view('auth.passwords.emailconfirmation');
    } else {
        return view('auth.passwords.usernotfound');
    }

});