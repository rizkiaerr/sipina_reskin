<?php

use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WbpController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\WbpShowController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TrackAdminController;
use App\Http\Controllers\adminController;



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
    return view('home',[
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'report',
        'categories' => Category::all()
    ]);
});



Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout',[LoginController::class,'logout']); //diganti jadi get

// Route::get('/dashboard', function(){
//     $wordlist = Book::get();
//     $wordCount = $wordlist->count();
//     dd($wordCount);
//     return view('dashboard.index',[
//         'wordcount' => $wordCount
//     ]);
// })->middleware('auth');

Route::get('/dashboard', [adminController::class, 'index'])->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/wbp', [WbpShowController::class,'show']);

Route::resource('/dashboard/wbp', WbpController::class)->middleware('auth','admin');
Route::resource('/dashboard/kegiatan', KegiatanController::class)->middleware('auth','admin');
Route::resource('/dashboard/kesehatan', KesehatanController::class)->middleware('auth','admin');
Route::resource('/dashboard/pelanggaran', PelanggaranController::class)->middleware('auth','admin');
Route::resource('/dashboard/status', StatusController::class)->middleware('auth','admin');

Route::resource('/book/create',BookController::class)->middleware('guest');
Route::get('generate-pdf', [PDFController::class,'generatePDF'])->middleware('guest');
Route::post('print-pdf', [PDFController::class,'printPDF'])->middleware('admin');
// Route::get('/cek_penitipan', [TrackController::class,'show']);
Route::resource('/dashboard/resi_admin',TrackAdminController::class)->middleware('admin');
Route::resource('/resi',TrackController::class)->middleware('guest');

