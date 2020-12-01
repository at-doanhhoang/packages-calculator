<?php
Route::get('/calculator', function() {
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'QuocDoanh\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'QuocDoanh\Calculator\CalculatorController@subtract');