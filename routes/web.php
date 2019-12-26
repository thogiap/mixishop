<?php
Route::get('/', function (){
    return view('mixishop');
});

Route::get('/register', 'AuthController@get_register')->name('register')->middleware('checklogin');
Route::post('/register', 'AuthController@post_register');
Route::get('/login', 'AuthController@get_login')->name('login')->middleware('checklogin');
Route::post('/login', 'AuthController@post_login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/home', 'AuthController@home')->name('home')->middleware('checkhome');

Route::prefix('admin')->middleware('checkadmin')->group(function () {
    Route::get('/listuser', 'AdminController@listuser')->name('listuser');
    Route::get('/edit-user/{id}', 'AdminController@get_edit_user')->name('edituser');
    Route::post('/edit-user/{id}', 'AdminController@post_edit_user');
    Route::get('/delete-user/{id}', 'AdminController@delete_user')->name('deleteuser');

    Route::get('/create-category', 'CategoryController@get_create_category')->name('createcategory');
    Route::post('/create-category', 'CategoryController@post_create_category');
    Route::get('/category', 'CategoryController@category')->name('category');
    Route::get('/edit-category/{id}', 'CategoryController@get_edit_category')->name('editcategory');
    Route::post('/edit-category/{id}', 'CategoryController@post_edit_category');
    Route::get('/delete-category/{id}', 'CategoryController@delete_category')->name('deletecategory');

    Route::get('/create-product', 'ProductController@get_create_product')->name('createproduct');
    Route::post('/create-product', 'ProductController@post_create_product');
    Route::get('/product', 'ProductController@product')->name('product');
    Route::get('/edit-product/{id}', 'ProductController@get_edit_product')->name('editproduct');
    Route::post('/edit-product/{id}', 'ProductController@post_edit_product');
    Route::get('/delete-product/{id}', 'ProductController@delete_product')->name('deleteproduct');

    Route::get('/size','SizeController@size')->name('size');
});
