<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RescomController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard', [MovieController::class, 'allMovies'])->name('allMovies');

Route::post('add-to-list/{movie}', [WatchlistController::class, 'store'])->name('add.to.list');

Route::get('list', [WatchlistController::class, 'watchlist'])->name('get.list');

Route::delete('remove-from-list/{movie}', [WatchlistController::class, 'removeMovie'])->name('delete.movie');

Route::get('movie/{movie}', [MovieController::class, 'getMovie'])->name('get.movie');

Route::post('add-comment/{movie}', [CommentController::class, 'store'])->name('add.comment');


Route::get('commentedit/{comment}', [CommentController::class, 'editcomment'])->name('comment.edit');

Route::put('commentupdate/{comment}', [CommentController::class, 'updatecomment'])->name('coment.update');

//Route::get('gluposti', [CommentController::class, 'glupost'])->name('glupost');

Route::delete('commentdestroy{comment}', [CommentController::class, 'deletecomment'])->name('comment.destroy');

Route::get('commentresponse/{comment}', [RescomController::class, 'responsecomment'])->name('comment.response');

Route::post('add-response/{comment}', [RescomController::class, 'storeresponse'])->name('add.response');

Route::get('reply/{comment}/edit', [CommentController::class, 'editReply'])->name('reply.edit');

Route::put('reply/update/{comment}', [CommentController::class, 'updatereply'])->name('reply.update');

Route::delete('replydestroy{reply}', [CommentController::class, 'deleteReply'])->name('comment.destroy');

//Route::get('movie/{movie}', [CommentController::class, 'updatecomment']);

Route::get('mail', [MailController::class, 'sendMail']);
