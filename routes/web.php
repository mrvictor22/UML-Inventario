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
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('bodega-tbls')->name('bodega-tbls/')->group(static function() {
            Route::get('/',                                             'BodegaTblController@index')->name('index');
            Route::get('/create',                                       'BodegaTblController@create')->name('create');
            Route::post('/',                                            'BodegaTblController@store')->name('store');
            Route::get('/{bodegaTbl}/edit',                             'BodegaTblController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BodegaTblController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bodegaTbl}',                                 'BodegaTblController@update')->name('update');
            Route::delete('/{bodegaTbl}',                               'BodegaTblController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('roles')->name('roles/')->group(static function() {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('provedores-tbls')->name('provedores-tbls/')->group(static function() {
            Route::get('/',                                             'ProvedoresTblController@index')->name('index');
            Route::get('/create',                                       'ProvedoresTblController@create')->name('create');
            Route::post('/',                                            'ProvedoresTblController@store')->name('store');
            Route::get('/{provedoresTbl}/edit',                         'ProvedoresTblController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProvedoresTblController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{provedoresTbl}',                             'ProvedoresTblController@update')->name('update');
            Route::delete('/{provedoresTbl}',                           'ProvedoresTblController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('producto-tbls')->name('producto-tbls/')->group(static function() {
            Route::get('/',                                             'ProductoTblController@index')->name('index');
            Route::get('/create',                                       'ProductoTblController@create')->name('create');
            Route::post('/',                                            'ProductoTblController@store')->name('store');
            Route::get('/{productoTbl}/edit',                           'ProductoTblController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductoTblController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{productoTbl}',                               'ProductoTblController@update')->name('update');
            Route::delete('/{productoTbl}',                             'ProductoTblController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('producto-bodega-tbls')->name('producto-bodega-tbls/')->group(static function() {
            Route::get('/',                                             'ProductoBodegaTblController@index')->name('index');
            Route::get('/create',                                       'ProductoBodegaTblController@create')->name('create');
            Route::post('/',                                            'ProductoBodegaTblController@store')->name('store');
            Route::get('/{productoBodegaTbl}/edit',                     'ProductoBodegaTblController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductoBodegaTblController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{productoBodegaTbl}',                         'ProductoBodegaTblController@update')->name('update');
            Route::delete('/{productoBodegaTbl}',                       'ProductoBodegaTblController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('compras-tbls')->name('compras-tbls/')->group(static function() {
            Route::get('/',                                             'ComprasTblController@index')->name('index');
            Route::get('/create',                                       'ComprasTblController@create')->name('create');
            Route::post('/',                                            'ComprasTblController@store')->name('store');
            Route::get('/{comprasTbl}/edit',                            'ComprasTblController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ComprasTblController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{comprasTbl}',                                'ComprasTblController@update')->name('update');
            Route::delete('/{comprasTbl}',                              'ComprasTblController@destroy')->name('destroy');
        });
    });
});