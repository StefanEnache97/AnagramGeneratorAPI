<?php

use App\Http\Controllers\ApiController;
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

Content can be any setence and the number sets a limit to response size.
The reponse should be a list of anagrams for content.


*WARNING*
I noticed that if you cancel the api call whilst it is still fetching, the process running the CreateAnagram.jar does not end
=> can result in api not responding. Manually end task if this happens.

Only use short (2-3 word) sentences to mitigate this!

*/


Route::get('/api', [ApiController::class, 'anagram']);
