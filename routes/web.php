<?php
Route::get('/', 'FormsController@codeGate');
Route::post('/', 'FormsController@codeGatePost');

Route::get('/prizes', 'ViewsController@showPrizes');
Route::get('/official-rules', 'ViewsController@showRules');
Route::get('/past-winners', 'ViewsController@showWinners');
Route::get('/products', 'ViewsController@showProducts');
Route::get('/thanks', 'ViewsController@showThanks');
Route::get('/sorry', 'ViewsController@showSorry');

Route::get('/register', 'RegistrationController@create')->middleware('checkEmail');
Route::post('/register', 'RegistrationController@store');

Route::get('/email', 'EmailController@emailGate')->middleware('checkCode');
Route::post('/email', 'EmailController@emailGatePost');