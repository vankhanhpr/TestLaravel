<?php
use Illuminate\Http\Request;

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
//Route::apiResource("user","UserController");
//Route::get('user/getall','UserController@getall');
//  Route::get('user/{getByID}', 'UserController@getByID');
Route::put('user/{update}', 'UserController@update');
//Route::post('user/{insert}', 'UserController@insert');
Route::delete('user/{delete}', 'UserController@delete');
//login/
Route::post('user/login', 'UserController@login');

Route::resource("test","TestController");
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Route::get('user/getall','UserController@getall');
//Route::post('user/{login}', 'UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user/getall','UserController@getall');
});
//Route::get('user/getall', array('middleware' => 'cors','UserController@getall'));
//Route::get('user/getall','UserController@getall');