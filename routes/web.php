<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthAdmin;
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
    return view('layout');
});
Route::get('home', 'StoreFrontController@home');
Route::get('shop', 'ProductFrontendController@index');
Route::get('single/{id}', 'ProductFrontendController@single');
Route::get('about', function () {
    return view('about.about');
});
Route::get('contact', function () {
    return view('contact.contact');
});
Route::get('checkout', function () {
    return view('checkout.layout');
   
});
Route::get('payment', function () {
    return view('payment.layout');
});
// admin-page================>>>>>>>>>>>> middlewere
Route::prefix('admin')->middleware('personnel')->group(function () {
    Route::get('wellcome','Auth@loginHandle');
    
        // customer------->
        Route::middleware(['admin'])->group(function () {
            Route::get('customer','AdminControllers@customer');
            Route::get('customer/{id}','AdminControllers@customer');
            Route::post('customerHandle','AdminControllers@customerHandle');
            // showList ->>>
            Route::get('customerList','AdminControllers@customerList');
            Route::get('customerList/{page}','AdminControllers@customerList');
            Route::post('updateCustomer/{id}','AdminControllers@updateCustomer');
            Route::get('delete/{id}','AdminControllers@deleteCustomer');
            Route::post('searchCustomer','AdminControllers@search');
            // customer<-------
            // product-------->>>>>
            Route::get('product','ProductController@create');
            Route::get('productList','ProductController@index');
            Route::post('AddProductHandle','ProductController@store');
            Route::get('editProduct/{id}','ProductController@edit');
            Route::post('updateProduct/{id}','ProductController@update');
            Route::post('updateStatus/{id}','ProductController@updateStatus');
            Route::get('deleteProduct/{id}','ProductController@destroy');
            Route::post('productSearch','ProductController@search');
            // produc<<<<<<<<---------
            // users->>>>>>>>>>>>>>.
            Route::post('usersSearch','UsersController@searchView')->middleware('manager');
            Route::get('users','UsersController@index')->middleware('manager');;
            // role
            Route::post('roleHandle/{id}','UsersController@roleHandle');
            Route::get('roleAdmin/{id}','UsersController@edit');
            Route::post('roleUpdate/{id}','UsersController@update');
            Route::get('roleAdmin/{id}','UsersController@edit');
            Route::post('roleUpdate/{id}','UsersController@update');
            Route::get('roleAdminDestroy/{id}','UsersController@destroy');
            // users <<<<<<<<<---------
            Route::get('bill','AdminControllers@billHandle');
            // banner-manager >>>>>>>>>>>>>>>
            Route::get('bannerViews','AdminControllers@billHandle');
        });
        
       
    });

    // admin-page<<<<<==================================
    // signup===>>>>>>>>>>
     // handle login
     Route::post('loginHandle','Auth@loginHandle');
     Route::post('signupHandle','Auth@signupHandle');
    Route::get('signup','Auth@signup');
   
    // login===>>>>>>>>>>
    Route::get('login','Auth@login');
   
    // logout===>>>>>>>>
    Route::get('logout','Auth@logout');
//    page return err
    Route::get('pageComeBack', function (){
        return view('admin-page.layout.content.pageComeBack');
    });
  

