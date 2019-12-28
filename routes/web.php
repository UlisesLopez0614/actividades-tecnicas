<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('technicians')->name('technicians/')->group(static function() {
            Route::get('/',                                             'TechniciansController@index')->name('index');
            Route::get('/create',                                       'TechniciansController@create')->name('create');
            Route::post('/',                                            'TechniciansController@store')->name('store');
            Route::get('/{technician}/edit',                            'TechniciansController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TechniciansController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{technician}',                                'TechniciansController@update')->name('update');
            Route::delete('/{technician}',                              'TechniciansController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('installations')->name('installations/')->group(static function() {
            Route::get('/',                                             'InstallationsController@index')->name('index');
            Route::get('/create',                                       'InstallationsController@create')->name('create');
            Route::post('/',                                            'InstallationsController@store')->name('store');
            Route::get('/{installation}/edit',                          'InstallationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'InstallationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{installation}',                              'InstallationsController@update')->name('update');
            Route::delete('/{installation}',                            'InstallationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('revisions')->name('revisions/')->group(static function() {
            Route::get('/',                                             'RevisionsController@index')->name('index');
            Route::get('/create',                                       'RevisionsController@create')->name('create');
            Route::post('/',                                            'RevisionsController@store')->name('store');
            Route::get('/{revision}/edit',                              'RevisionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RevisionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{revision}',                                  'RevisionsController@update')->name('update');
            Route::delete('/{revision}',                                'RevisionsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('gpschanges')->name('gpschanges/')->group(static function() {
            Route::get('/',                                             'GpschangesController@index')->name('index');
            Route::get('/create',                                       'GpschangesController@create')->name('create');
            Route::post('/',                                            'GpschangesController@store')->name('store');
            Route::get('/{gpschange}/edit',                             'GpschangesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'GpschangesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{gpschange}',                                 'GpschangesController@update')->name('update');
            Route::delete('/{gpschange}',                               'GpschangesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('simchanges')->name('simchanges/')->group(static function() {
            Route::get('/',                                             'SimchangesController@index')->name('index');
            Route::get('/create',                                       'SimchangesController@create')->name('create');
            Route::post('/',                                            'SimchangesController@store')->name('store');
            Route::get('/{simchange}/edit',                             'SimchangesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SimchangesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{simchange}',                                 'SimchangesController@update')->name('update');
            Route::delete('/{simchange}',                               'SimchangesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('uninstallations')->name('uninstallations/')->group(static function() {
            Route::get('/',                                             'UninstallationsController@index')->name('index');
            Route::get('/create',                                       'UninstallationsController@create')->name('create');
            Route::post('/',                                            'UninstallationsController@store')->name('store');
            Route::get('/{uninstallation}/edit',                        'UninstallationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UninstallationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{uninstallation}',                            'UninstallationsController@update')->name('update');
            Route::delete('/{uninstallation}',                          'UninstallationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('gpstransfers')->name('gpstransfers/')->group(static function() {
            Route::get('/',                                             'GpstransfersController@index')->name('index');
            Route::get('/create',                                       'GpstransfersController@create')->name('create');
            Route::post('/',                                            'GpstransfersController@store')->name('store');
            Route::get('/{gpstransfer}/edit',                           'GpstransfersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'GpstransfersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{gpstransfer}',                               'GpstransfersController@update')->name('update');
            Route::delete('/{gpstransfer}',                             'GpstransfersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('homologations')->name('homologations/')->group(static function() {
            Route::get('/',                                             'HomologationsController@index')->name('index');
            Route::get('/create',                                       'HomologationsController@create')->name('create');
            Route::post('/',                                            'HomologationsController@store')->name('store');
            Route::get('/{homologation}/edit',                          'HomologationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'HomologationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{homologation}',                              'HomologationsController@update')->name('update');
            Route::delete('/{homologation}',                            'HomologationsController@destroy')->name('destroy');
        });
    });
});