<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::post('html',function(Request $request){
    $name = $request->input('text');
    DB::table('editor')->insert(
        ['value' => $name]
    );
    return 'data saved successfully';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','HomeController@dashboard')->name('dashboard');
Route::get('/getname',function (Request $request){


//    $user = Auth::user()->setRememberToken();

        return $request->user();
});
