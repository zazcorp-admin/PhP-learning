<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController as pc;

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

// Route::get('/about', function () {
//     return "hello this is about section";
// });

// Route::get('/contact', function() {
//     return "This is contact page";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number" . $id . " " . $name;
// });


// Route::get("admin/post/example", array("as"=>"admin.home", function(){
//     $url = route('admin.home');
//     return "this url is". " ". $url;
// }));

// Route::get('test', function(){
//   return "this is just a  testing for anything";
// });

// Route::get('/post', 'app\Http\C ontrollers\PostsController@index');
// Route::get('/post', [PostsController::class, 'índex']);

// Route::get('/test', 'PostsController@index');

//working this only
// Route::get('/post/{id}', [pc::class, 'index']);


//working for resources method
Route::resource('post', pc::class);
