<?php

use App\Http\Controllers\AnagramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

Route::post('/create', [MessageController::class, 'create']);

Route::get('/message/{id}', [MessageController::class, 'view']);


/*
Try making a request with the following query params:

content
number

Content can be any setence (preferably not too long) and the number sets a limit to response size.
The reponse should be a list of anagrams for content.

*/


Route::get('/api', [AnagramController::class, 'anagram']);
