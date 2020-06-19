<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web']], function () {
    //Route::get('/', 'FrontendController@index')->name('homepage');
    Route::get('/', 'FrontendController@welcome')->name('welcome');
    Route::get('/select-plan/{plan}', 'FrontendController@select')->name('select.plan');
    Route::get('/terms', 'TermsController@terms')->name('terms');
  	Route::get('plan/{id}', 'InvoiceController@userinvoice')->name('order');
  	Route::post('post-invoice', 'InvoiceController@postInvoice')->name('post-invoice');
  	Route::get('confirmation', 'InvoiceController@confirmation')->name('invoice');

    Route::get('pasien/show/{nik}', 'PasienController@show')->name('pasien.show');
  	Route::post('pasien/store', 'PasienController@store')->name('pasien.store');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    //Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('dashboard', ['as' => 'public.home',   'uses' => 'UserController@index'])->name('home');

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController',
        [
            'names' => [
              'show'   => 'profile',
            ],
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', 'SoftDeletesController', [
        'names' => [
          'index'   => 'deleteduser',
        ],
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('logs');
    Route::get('routes', 'AdminDetailsController@listRoutes')->name('routes');
    Route::get('active-users', 'AdminDetailsController@activeUsers')->name('active-users');

    Route::resource('plans', 'PlanController', [
      'names' => [
          'index'   => 'plans',
      ],
    ]);

    Route::resource('memberships', 'MembershipController', [
        'names' => [
            'index'   => 'memberships',
        ],
    ]);

    Route::resource('invoices', 'InvoiceController', [
        'names' => [
            'index'   => 'invoices',
			'confirmation'   => 'invoice',
        ],
    ]);

});

Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'activated', 'role:manager', 'activity', 'twostep', 'checkblocked']], function () {
      Route::get('pasien', 'PasienController@index')->name('pasien');
    	Route::get('pasien/create', 'PasienController@create')->name('pasien.create');
    	Route::get('pasien/edit/{pasien}', 'PasienController@edit')->name('pasien.edit');
    	Route::delete('pasien/{pasien}', 'PasienController@destroy')->name('pasien.destroy');
    	Route::put('pasien/{id}', 'PasienController@update')->name('pasien.update');
});

Route::redirect('/php', '/phpinfo', 301);
