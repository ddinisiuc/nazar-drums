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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'FrontendController@index')->name('index');

Route::get('/shop', 'FrontendController@shop')->name('shop');

Route::get('/product-detail/{slug}', 'FrontendController@productDetail')->name('product_detail');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/blog-detail', function () {
    return view('blog.blog-detail');
})->name('blog-detail');

Route::get('/about-me', function () {
    return view('about-me');
})->name('about-me');


