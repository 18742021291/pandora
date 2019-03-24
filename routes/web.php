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
Route::get('/home','IndexController@index');
Route::get('/', 'IndexController@index');
Route::get("/setting",'SettingController@index');//用户设置面板
Route::post("/setting",'SettingController@save');//用户设置保存
Route::get('/file','FileController@show');//用户文件列表页面()
Route::post('/file','FileController@upload');//用户上传自己文件(包含用户更改自己的文件可见性)
Route::auth();
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.index'); //后台首页
    Route::get('/admin/profile', 'AdminController@adminInfo');//管理员资料
    Route::get('/admin/users', 'UsersController@index')->name('admin.users');//系统用户信息
    Route::get('/admin/users/{id}', 'UsersController@edit');//系统用户信息
    Route::patch('/admin/users/{id}', 'UsersController@update');//系统用户信息修改
    Route::delete('/admin/users/{id}', 'UsersController@destroy');//系统用户删除
    Route::post('/admin/profile/update', 'UsersController@updateProfile');//管理员信息修改
});
