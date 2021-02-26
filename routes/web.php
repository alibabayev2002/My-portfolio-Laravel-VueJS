<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\FontController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SkillController;

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

Route::get('/', [MainController::class,'index'])->name('home');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/projects',[MainController::class,'projects'])->name('projects');
Route::get('/skills',[MainController::class,'skills'])->name('skills');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::post('/message/send',[MainController::class,'sendMessage'])->name('send.message');


Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/post/{slug}',[BlogController::class,'post'])->name('view.post');
Route::get('/posts',[BlogController::class,'getPosts'])->name('get.posts');

Route::get('/admin/login',[AdminController::class,'showLogin'])->name('login');
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login.post');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.home');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    Route::get('/categories',[CategoriesController::class,'index'])->name('categories');
    Route::post('/category/delete',[CategoriesController::class,'deleteCategory'])->name('delete.category');
    Route::get('/category/add',[CategoriesController::class,'addCategory'])->name('add.category');
    Route::post('/category/edit',[CategoriesController::class,'editCategory'])->name('edit.category');

    Route::get('/posts',[PostController::class,'index'])->name('posts');
    Route::post('/post/add',[PostController::class,'post'])->name('post');
    Route::post('/post/delete',[PostController::class,'deletePost'])->name('delete.post');

    Route::get('/pages',[PageController::class,'index'])->name('pages');
    Route::post('/page/add',[PageController::class,'addPage'])->name('add.page');
    Route::post('/page/edit',[PageController::class,'editPage'])->name('edit.page');
    Route::get('/page/delete',[PageController::class,'deletePage'])->name('delete.page');
    Route::get('/page/font',[PageController::class,'selectFont'])->name('select.font');

    Route::get('/fonts',[FontController::class,'index'])->name('fonts');
    Route::post('/font/add',[FontController::class,'addFont'])->name('add.font');
    Route::get('/font/delete',[FontController::class,'deleteFont'])->name('delete.font');

    Route::get('/skills',[SkillController::class,'index'])->name('admin.skills');
    Route::post('/skill/add',[SkillController::class,'addSkill'])->name('add.skill');
    Route::post('/skill/delete',[SkillController::class,'deleteSkill'])->name('delete.skill');

    Route::get('/configs',[ConfigController::class,'index'])->name('configs');
    Route::post('/configs',[ConfigController::class,'save'])->name('configs.save');

    Route::get('/messages',[AdminController::class,'messages'])->name('messages');
});

