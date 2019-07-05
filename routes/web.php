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
use Illuminate\Support\Facades\Input;
use App\post;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function (){
    return view('admin.index');
});
Route::resource('admin/users','AdminUserController');


Route::group(['middleware'=>'admin'],function(){
//    Route::resource('admin/users/index','AdminUserController');
//    Route::resource('admin/users/edit','AdminUserController');
Route::resource('admin/categories','AdminCategoryController');


});


Route::resource('admin/users','AdminUserController');

Route::resource('admin/posts','AdminPostController');

Route::any('search',function(){
    $q = Input::get ( 'q' );
    $posts = post::where('title','LIKE','%'.$q.'%')->orWhere('body','LIKE','%'.$q.'%')->get();

//    dd($posts);
    if(count($posts) > 0){
        return view('admin.posts.index',compact('posts'));

//        return view('admin.posts.index')->withDetails($posts)->withQuery ( $q );

    }
    else {
            return view ('home')->withMessage('No Details found. Try to search again !');
    }
});

//Route::resource('search/','SearchPostController');
