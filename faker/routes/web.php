<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'faker@myFun')
       ->name('pages.home');
        