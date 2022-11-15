<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

/*用post方式新增資料
 * Route::get('/', function () {
    //return redirect(route('posts.index'));
    $post=new Post();
    $post->title='test title';
    $post->content='test content';
    $post->save();
    return 'save,OK';
});*/

/*用create方式新增資料*/
post::create([
    'title'=>'created title',
    'content'=>'created content',
]);

Route::get ('posts',[PostController::class,'index'])->name('posts.index');
Route::get ('post',[PostController::class,'show'])->name('posts.show');
Route::get ('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get ('about',[PostController::class,'about'])->name('posts.about');