<?php
use think\facade\Route;

Route::get('/', 'Index/index');
Route::post('submit', 'Index/submit');
