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

Route::get('/', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('entrar', 'Auth\LoginController@showLoginForm')->name('entrar');
Route::post('entrar', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('sair');


Route::get('cadastrar', 'Auth\RegisterController@showRegistrationForm')->name('cadastrar');
Route::post('cadastrar', 'Auth\RegisterController@register');

//ROTAS PRA FRONT
Route::get('/usuario/perfil','Front\UsuarioController@perfil')->name('usuario.perfil');
Route::post('/usuario/perfil','Front\UsuarioController@perfilPost')->name('usuario.perfil.post');
Route::get('/usuario/foto','Front\UsuarioController@foto')->name('usuario.foto');
Route::post('/usuario/foto','Front\UsuarioController@fotoPost')->name('usuario.foto.post');
Route::get('/usuario/conta','Front\UsuarioController@conta')->name('usuario.conta');
Route::post('/usuario/conta','Front\UsuarioController@contaPost')->name('usuario.conta.post');



//ROTAS PARA ADMIN
Route::group([ 'prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
    Route::get('/','Admin\AdminController@index')->name('admin');
    Route::get('usuarios','Admin\AdminController@index')->name('admin.usuarios');
    Route::get('noticias','Admin\AdminController@index')->name('admin.noticias');
    Route::get('sistema','Admin\AdminController@index')->name('admin.sistema');

    Route::resource('roles', 'Admin\RolesController', ['as' => 'roles']);
    Route::resource('permissions', 'Admin\PermissionsController', ['as' => 'permissions']);
    Route::resource('users', 'Admin\UsersController', ['as' => 'users']);
    Route::resource('pages', 'Admin\PagesController', ['as' => 'pages']);
    Route::resource('activitylogs', 'Admin\ActivityLogsController', ['as' => 'activitylogs'])->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('settings', 'Admin\SettingsController', ['as' => 'settings']);
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
});

Auth::routes();

