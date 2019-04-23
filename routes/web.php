<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-contacts','aboutController@AllContact')->name('all.contacts');
Route::get('/insert-data','aboutController@InsertData');
Route::post('/data-added','aboutController@DataAdded');

Route::get('/delete-contact{id}','aboutController@Delete');
Route::get('/edit-contact{id}','aboutController@Edit');
Route::post('/update-contact/{id}','aboutController@Update');
Route::get('/view-contact/{id}','aboutController@View');

