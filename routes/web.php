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

Route::get('/', 'FrontendController@index')->name('home');

Route::get('/shop', 'FrontendController@shop')->name('shop');
Route::get('/product-detail/{slug}', 'FrontendController@productDetail')->name('product_detail');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/blog/{slug}', 'FrontendController@blogDetail')->name('blog_detail');
Route::get('/about', 'FrontendController@about')->name('about-me');


Route::post('/send-order', 'FrontendController@sendOrder')->name('send_order');
Route::post('/send-contact', 'FrontendController@sendContact')->name('send_contact');
Route::post('/add-comment', 'FrontendController@addComment')->name('add_comment');

Route::get('/project/{slug}', 'FrontendController@project')->name('project');






