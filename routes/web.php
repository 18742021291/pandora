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

Route::get('/', 'IndexController@index');
Route::auth();
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.index'); //后台首页
    Route::get('/admin/profile', 'AdminController@adminInfo');//管理员资料
    Route::get('/admin/users', 'UsersController@index')->name('admin.users');//系统用户信息
    Route::get('/admin/users/{id}', 'UsersController@edit');//系统用户信息
    Route::patch('/admin/users/{id}', 'UsersController@update');//系统用户信息修改
    Route::delete('/admin/users/{id}', 'UsersController@destroy');//系统用户删除
    Route::post('/admin/profile/update', 'UsersController@updateProfile');//管理员信息修改

    Route::get('/admin/question/index', 'QuestionsController@index')->name('admin.questions');//问题列表界面
    Route::get('/admin/question/create', 'QuestionsController@create');//创建问题
    Route::post('/admin/question', 'QuestionsController@store');//创建问题
    Route::get('/admin/question/edit/{id}', 'QuestionsController@edit');//编辑问题页面
    Route::patch('/admin/question/{id}', 'QuestionsController@update');//编辑问题
    Route::delete('/admin/question/{id}', 'QuestionsController@destroy');//删除问题

    Route::get('/admin/comments/index', 'CommentsController@index')->name('admin.comments');//评论列表
    Route::delete('/admin/comment/{id}', 'CommentsController@destroy');//删除评论

    Route::get('/admin/topics/index', 'TopicsController@index')->name('admin.topics');//标签列表
    Route::delete('/admin/comment/{id}', 'TopicsController@destroy');//删除标签
});
