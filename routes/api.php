<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/cours', function() {
    return \App\Models\Cour::all();
});

Route::get('/cours/{coursId}', function($courId) {
    return \App\Models\Cour::findOrFail($courId);
});

Route::post('/cours', function(Request $request) {
    return \App\Models\Cour::create($request->all());
});

Route::put('/cours/{coursId}', function($courId, Request $request) {
    $task = \App\Models\Cour::findOrFail($courId);
    return $task->update($request->all());
});

Route::delete('/cours/{coursId}', function($courId) {
    $task = \App\Models\Cour::findOrFail($courId);
    return $task->delete();
});
