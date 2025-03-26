<?php

use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::post('/newsletter/store', [FrontendController::class, 'newsletter_store'])->name('newsletter.store');
Route::post('/contact/store', [FrontendController::class, 'storeContact'])->name('contact.store');

//Pages
Route::get('/under_construction', [FrontendController::class, 'underConstruction'])->name('under-construction');

//Blogs
Route::get('/page/blog', [BlogController::class, 'blog'])->name('page.blog');
Route::get('/page/blog/view/{id}', [BlogController::class, 'blogView'])->name('page.blog.view');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    //settings
    Route::get('/settings', [BackendController::class, 'settings'])->name('settings');
    Route::post('/setting/update', [BackendController::class, 'update'])->name('settings.update');
    //Hero Section
    Route::get('/hero_section', [BackendController::class, 'heroSection'])->name('hero.section');
    Route::post('/hero_section/update', [BackendController::class, 'heroUpdate'])->name('hero.section.update');
    //About Us
    Route::get('/about_us', [BackendController::class, 'about_us'])->name('about.us');
    Route::post('/about_us/update', [BackendController::class, 'about_us_update'])->name('about.us.update');
    Route::post('/our_vision/update', [BackendController::class, 'visionUpdate'])->name('ourVision.update');
    Route::post('/our_mission/update', [BackendController::class, 'missionUpdate'])->name('ourMission.update');
    //Newsletter
    Route::get('/newsletter', [BackendController::class, 'newsletter'])->name('newsletter');
    Route::post('/newsletter/update', [BackendController::class, 'newsletter_update'])->name('newsletter.update');
    Route::get('/newsletter/delete/{id}', [BackendController::class, 'newsletter_delete'])->name('delete.newsletter');
    //User List
    Route::get('/user/list', [BackendController::class, 'userList'])->name('user.list');
    Route::post('/user/registerByAdmin' , [BackendController::class, 'registerByAdmin'])->name('user.registerByAdmin');
    Route::post('/user/updateByAdmin/{id}' , [BackendController::class, 'userUpdateByAdmin'])->name('user.updateByAdmin');
    Route::get('/user/deleteByAdmin/{id}', [BackendController::class, 'userDeleteByAdmin'])->name('delete.userByAdmin');

    //gallary List
    Route::controller(GallaryController::class)->group(function(){

        Route::get('/gallery/list', 'galleryList')->name('gallery.list');
        Route::post('/gallery/store', 'galleryStore')->name('gallery.store');
        Route::post('/gallery/update/{id}', 'galleryUpdate')->name('gallery.update');
        Route::get('/gallery/delete/{id}', 'galleryDelete')->name('gallery.delete');
        Route::post('/gallery/toggle_status', 'toggleStatus')->name('gallery.toggleStatus');
    });

    //Blog Section
    Route::get('/blog/list', [BlogController::class, 'blogList'])->name('blog.list');
    Route::get('/blog/create', [BlogController::class, 'blogCreate'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'blogStore'])->name('blog.store');
    Route::get('/blog/delete/{id}', [BlogController::class, 'blogDelete'])->name('delete.blog');
    Route::get('/blog/edit/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
    Route::post('/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    Route::post('/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    Route::get('district-get/ajax/{division_id}',[BlogController::class, 'getDistrictWithAjax']);
    Route::get('state-get/ajax/{district_id}',[BlogController::class, 'getStateWithAjax']);
    //category
    Route::post('/blog/category/store', [BlogController::class, 'blogCategoryStore'])->name('blog.category.store');
    Route::get('/blog/category/delete/{id}', [BlogController::class, 'blogCategoryDelete'])->name('delete.blog.category');
    Route::post('/category/status/update/{id}', [BlogController::class, 'categoryStatusUpdate'])->name('category.status.update');
    //Description
    Route::post('/description/edit/{id}', [BackendController::class, 'description'])->name('description');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
