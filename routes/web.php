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

/*Route::get('/', function () {
    return view('phonebook');
});*/

/*Phone Book Template Route*/
Route::get('/','PhoneBookController@PhoneBookTemplteView');

Route::post('phonebookstore','PhoneBookController@StorePhoneBook')->name('phonebookstore.StorePhoneBook');

Route::get('phonebookeditform/{id}','PhoneBookController@PhoneBookEditForm')->name('phonebookeditform.PhoneBookEditForm');

Route::post('phonebookupdate/{id}','PhoneBookController@PhoneBookUpdate')->name('phonebookupdate.PhoneBookUpdate');

Route::get('phonebookdelete/{id}','PhoneBookController@delete')->name('phonebookdelete.delete');

Route::get('phonebooksingleview/{id}','PhoneBookController@show')->name('phonebooksingleview');