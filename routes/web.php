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
Route::view('/about', 'user.about');
Route::view('/contact', 'user.contact');
Route::view('/pay_now', 'user.pay_now');
Route::post('/pay_now', 'PaymentController@payWithpaypal')->name('pay_now');
Route::get('status', 'PaymentController@getPaymentStatus');
Route::view('/pay_now_status', 'user.pay_now_status');
//----------------------------------------------------------------------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----------------------------------admin-----------------------------------
Route::view('/dashboard', 'admin.dashboard');
Route::view('/user-list', 'admin.user-manage.user_list');

Route::view('/add-user', 'admin.user-manage.add_user');
Route::post('/add-user', 'HomeController@add_user')->name('add_user');
Route::get('/activate/{id}', 'HomeController@activate_user')->name('activate');
Route::get('/del_user/{id}', 'HomeController@del_user')->name('del_user');

//----------------------------------admin-----------------------------------
//----------------------------------user------------------------------------
Route::view('/edit-profile', 'user.edit_profile');
Route::post('/edit-profile', 'HomeController@edit_profile')->name('edit_profile');

Route::view('/campaign-all', 'user.campaign_all');
Route::view('/campaign-details', 'user.details_campaign');

Route::view('/user_campaign_all', 'user.manage_campaign.all');
Route::view('/add_campaign', 'user.manage_campaign.add_campaign');

Route::view('/view_campaign', 'user.manage_campaign.view_campaign');
Route::post('/add_campaign', 'CampaignController@store')->name('add_campaign');
Route::view('/edit_campaign', 'user.manage_campaign.edit_campaign');
Route::post('/edit_campaign', 'CampaignController@update')->name('edit_campaign');
Route::get('/del_campaign/{id}', 'CampaignController@del_campaign')->name('del_campaign');
//----------------------------------user------------------------------------
//----------------------------------university------------------------------
Route::view('/campaign_university', 'university.campaign_university');
Route::get('/approve_campaign/{id}', 'CampaignController@approve_campaign')->name('approve_campaign');

