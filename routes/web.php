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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'PageController@index')->name('index');
Route::resource('catalog','CatalogController')->parameters([
    'catalog'=>'slug'
]);

//Корзина товаров
Route::prefix('cart')->group(function (){
    Route::get('/','CartController@index')->name('cart.index');
    Route::get('add/{productId}','CartController@add')->name('cart.add');
    Route::patch('update', 'CartController@update')->name('cart.update');
    Route::get('drop','CartController@drop')->name('cart.drop');
    Route::get('destroy','CartController@destroy')->name('cart.destroy');
    Route::get('checkout','CartController@checkout')->name('cart.checkout');
    Route::get('success/{orderId}','CartController@success')->name('cart.success');
});
Route::resource('order','OrderController',['only' => ['store', 'update', 'destroy', 'show']]);


//Админка
Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth','isAdmin']], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@index')->name('admin.users.index');
        Route::get('edit/{user}', 'UserController@edit')->name('admin.users.edit');
        Route::put('edit/{user}', 'UserController@update')->name('admin.users.update');
        Route::get('delete/{user}', 'UserController@delete')->name('admin.users.delete');
    });

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('admin.products.index');
        Route::get('create', 'ProductController@create')->name('admin.products.create');
        Route::post('create', 'ProductController@store')->name('admin.products.store');
        Route::get('edit/{product}', 'ProductController@edit')->name('admin.products.edit');
        Route::put('edit/{product}', 'ProductController@update')->name('admin.products.update');
        Route::get('delete/{product}', 'ProductController@delete')->name('admin.products.delete');
        Route::get('drop/{id}', 'ProductController@destroy')->name('admin.products.destroy');
        Route::get('restore/{id}', 'ProductController@restore')->name('admin.products.restore');
    });

    // Orders

    Route::prefix('orders')->group(function () {
        Route::get('/', 'OrderController@index')->name('admin.orders.index');

    });
});


