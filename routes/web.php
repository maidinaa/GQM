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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']],function(){
		Route::get('/goal','GoalController@index');
		Route::post('/goal/create','GoalController@create');
		Route::get('/goal/{id}/edit','GoalController@edit');
		Route::post('/goal/{id}/update','GoalController@update');
		Route::get('/goal/{id}/delete','GoalController@delete');
		Route::get('/goal/{id}/goal_question','GoalController@goal_question');

		Route::get('/question', 'QuestionController@index');
		Route::post('/question/create','QuestionController@create');

		Route::get('/tester','TesterController@index');
		Route::post('/tester/create','TesterController@create');
		Route::get('/tester/{id}/edit','TesterController@edit');
		Route::post('/tester/{id}/update','TesterController@update');
		Route::get('/tester/{id}/delete','TesterController@delete');
		Route::get('/tester/{id}/profile' , 'TesterController@profile');
});

Route::group(['middleware' => ['auth', 'checkRole:admin, tester']], function(){
		Route::get('/dashboard','DashboardController@index');
});

Route::group(['middleware' => ['auth', 'checkRole:tester']], function(){
	Route::get('/testergoal','GoalController@testergoal');
});


