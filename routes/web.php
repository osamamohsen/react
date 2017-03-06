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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',['middleware' => 'cors',function(){
    return ['users'=>\App\User::all()];
}]);

Route::post('/users',['middleware' => 'cors',function(\Illuminate\Http\Request $request){
//    return $request->all();
    return \App\User::create($request->all());
}]);
