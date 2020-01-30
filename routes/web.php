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
    return view('index');
});

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return view('index');
});
// Route::get('login', function () {
//     return redirect('/auth');
    
// });

// Route::get('/opportunities', 'OpportunityController@index');
// Route::get('/opportunities/new', 'OpportunityController@create');
// Route::get('/opportunities/{$opportunity}','OpportunityController@show' );
Route::resource('opportunities', 'OpportunityController');
Route::get('auth', function () {
    return view('auth.login');
    
});

Route::get('/opportunities/categories', 'OpportunityCategoryController@create');
Route::get('admin/opportunities/category/create', 'OpportunityCategoryController@create');
Route::get('opportunities/categories/{category}', 'OpportunityCategoryController@show');
Route::get('tag/{slug}', 'TagController@index');

// Route::get('post-opportunity', function () {
//     return view('organisation.post-opportunity');
// });
