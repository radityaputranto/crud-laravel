<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'blokKontroler@index');


//buat user
Route::get('/blog/create', 'blokKontroler@create');
Route::post('/blog', 'blokKontroler@store');


Route::get('/blog/{id}', 'blokKontroler@show');

 Route::get('/blog/{id}/edit', 'blokKontroler@edit');
Route::put('/blog/{id}', 'blokKontroler@update');

Route::delete('/blog/{id}', 'blokKontroler@destroy');

