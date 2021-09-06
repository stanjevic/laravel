<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

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

Route::get('/posts', function(){
    return Post::all();
});

Route::post('/posts',function(){
    request()->validate([
        'title' => 'required',
        'body' =>'required'
    ]);
    return Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' =>request('user_id'),
        'cover_image'=>request('cover_image')
    ]);
});

Route::put('/posts/{post}', function(Post $post){
    request()->validate([
        'title' => 'required',
        'body' =>'required'
    ]);
    $success = $post ->update([
        'title'=> request('title'),
        'body' => request('body'),
        'user_id' =>request('user_id'),
        'cover_image'=>request('cover_image')
    ]);
    return[
        'success' => $success
    ];
});

Route::delete('/posts/{post}', function(Post $post){
    $success = $post->delete();
    return[
        'success'=>$success
    ];
});