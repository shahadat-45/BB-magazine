<?php

use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsurePostMethodForAdminRoutes;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/newsletter/store', [FrontendController::class, 'newsletter_store'])->name('newsletter.store');
Route::match(['get', 'post'], '/contact/store', [FrontendController::class, 'storeContact'])->name('contact.store');

//Blogs
Route::get('/under_construction', [FrontendController::class, 'underConstruction'])->name('under-construction');
Route::get('/frontend/gallery', [FrontendController::class, 'frontendGallery'])->name('frontend.gallery');
Route::get('/page/blog', [BlogController::class, 'blog'])->name('page.blog');

//Pages
Route::get('/news/view/{slug}', [PageController::class, 'newsView'])->name('news.view');
Route::get('page/gallery', [PageController::class, 'gallery'])->name('frontend.gallery');
Route::get('/all-categories', [PageController::class, 'allCategories'])->name('all-categories');
Route::get('/category/{slug}', [PageController::class, 'category'])->name('frontend.category');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //Activity Log
    Route::get('/activity-logs', [AdminController::class, 'activityLog'])->name('activity.log');
    Route::get('/activity-logs/data', [AdminController::class, 'getActivityLogs'])->name('activity.logs.data');
    Route::delete('/activity-logs/delete/{id}', [AdminController::class, 'delete'])->name('activity.logs.delete');
    Route::get('/trash', [AdminController::class, 'trash'])->name('trash');
    Route::get('/blogs/trashed/data', [AdminController::class, 'getTrashedData'])->name('blogs.trashed.data');
    Route::get('/blogs/restore/{id}', [AdminController::class, 'restoreNews'])->name('blogs.restore');
    Route::get('/blogs/force-delete/{id}', [AdminController::class, 'forceDeleteNews'])->name('blogs.force.delete');
    //settings
    Route::get('/settings', [BackendController::class, 'settings'])->name('settings');
    Route::match(['get', 'post'], '/setting/update', [BackendController::class, 'update'])->name('settings.update');
    //Hero Section
    Route::get('/hero_section', [BackendController::class, 'heroSection'])->name('hero.section');
    Route::match(['get', 'post'], '/hero_section/update', [BackendController::class, 'heroUpdate'])->name('hero.section.update');
    //About Us
    Route::get('/about_us', [BackendController::class, 'about_us'])->name('about.us');
    Route::match(['get', 'post'], '/about_us/update', [BackendController::class, 'about_us_update'])->name('about.us.update');
    Route::match(['get', 'post'], '/our_vision/update', [BackendController::class, 'visionUpdate'])->name('ourVision.update');
    Route::match(['get', 'post'], '/our_mission/update', [BackendController::class, 'missionUpdate'])->name('ourMission.update');
    //Newsletter
    Route::get('/newsletter', [BackendController::class, 'newsletter'])->name('newsletter');
    Route::match(['get', 'post'], '/newsletter/update', [BackendController::class, 'newsletter_update'])->name('newsletter.update');
    Route::get('/newsletter/delete/{id}', [BackendController::class, 'newsletter_delete'])->name('delete.newsletter');
    //User List
    Route::get('/user/list', [BackendController::class, 'userList'])->name('user.list');
    // Route::post('/user/registerByAdmin' , [BackendController::class, 'registerByAdmin'])->name('user.registerByAdmin');
    Route::match(['get', 'post'], '/user/registerByAdmin', [BackendController::class, 'registerByAdmin'])->name('user.registerByAdmin');

    Route::match(['get', 'post'], '/user/updateByAdmin/{id}' , [BackendController::class, 'userUpdateByAdmin'])->name('user.updateByAdmin');
    Route::get('/user/deleteByAdmin/{id}', [BackendController::class, 'userDeleteByAdmin'])->name('delete.userByAdmin');

    //gallary List
    Route::controller(GallaryController::class)->group(function(){

        Route::get('/gallery/list', 'galleryList')->name('gallery.list');
        Route::match(['get', 'post'], '/gallery/store', 'galleryStore')->name('gallery.store');
        Route::match(['get', 'post'], '/gallery/update/{id}', 'galleryUpdate')->name('gallery.update');
        Route::get('/gallery/delete/{id}', 'galleryDelete')->name('gallery.delete');
        Route::match(['get', 'post'], '/gallery/toggle_status', 'toggleStatus')->name('gallery.toggleStatus');
    });
// role and permission
       // permission all route
       Route::controller(RoleController::class)->middleware(['permission:permission.all'])->group(function () {

        //permission management
        Route::get('all/permission', 'allPermission')->name('all.permission');
        Route::get('add/permission', 'addPermission')->name('add.permission');
        Route::post('store/permission', 'storePermission')->name('store.permission');
        Route::get('edit/permission/{id}', 'editPermission')->name('edit.permission');
        Route::post('update/permission', 'updatePermission')->name('update.permission');
        Route::get('delete/permission/{id}', 'deletePermission')->name('delete.permission');
        // Route::get('import/permission', 'importPermission')->name('import.permission');
        // Route::get('export/permission', 'exportPermission')->name('export.permission');
        // Route::post('store/import/permission', 'storeImportPermission')->name('store.import.permission');
        //role all route
        Route::get('all/roles', 'allRoles')->name('all.role');
        Route::get('add/role', 'addRole')->name('add.role');
        Route::post('store/role', 'storeRole')->name('store.role');
        Route::get('edit/role/{id}', 'editRole')->name('edit.role');
        Route::post('update/role', 'updateRole')->name('update.role');
        Route::get('delete/role/{id}', 'deleteRole')->name('delete.role');
        // role have permission all route
        Route::get('role/have/permission', 'addRoleHavePermission')->name('add.role.have.permission');
        Route::post('role/permission/store', 'storeRolePermission')->name('role.permission.store');
        Route::get('assign/permission/of/role', 'assignPermissionOfRole')->name('assign.permission.of.role');
        Route::get('edit/assigned/permission/{id}', 'editAssignedPermission')->name('edit.assigned.permission');
        Route::post('update/assigned/permission/{id}', 'updateAssignedPermission')->name('update.assigned.permission');
        Route::get('delete/assigned/permission/{id}', 'deleteAssignedPermission')->name('delete.assigned.permission');
    });
    //Blog Section
    Route::get('/blog/list', [BlogController::class, 'blogList'])->name('blog.list');
    Route::get('/blog/create', [BlogController::class, 'blogCreate'])->name('blog.create');
    Route::match(['get', 'post'], '/blog/store', [BlogController::class, 'blogStore'])->name('blog.store');
    Route::get('/blog/delete/{id}', [BlogController::class, 'blogDelete'])->name('delete.blog');
    Route::get('/blog/edit/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
    Route::match(['get', 'post'], '/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    Route::match(['get', 'post'], '/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    Route::get('district-get/ajax/{division_id}',[BlogController::class, 'getDistrictWithAjax']);
    Route::get('state-get/ajax/{district_id}',[BlogController::class, 'getStateWithAjax']);
    Route::get('/blogs/data', [BlogController::class, 'getData'])->name('blogs.data');
    //category
    Route::match(['get', 'post'], '/blog/category/store', [BlogController::class, 'blogCategoryStore'])->name('blog.category.store');
    Route::get('/blog/category/delete/{id}', [BlogController::class, 'blogCategoryDelete'])->name('delete.blog.category');
    Route::match(['get', 'post'], '/category/status/update/{id}', [BlogController::class, 'categoryStatusUpdate'])->name('category.status.update');
    //Description
    Route::match(['get', 'post'], '/description/edit/{id}', [BackendController::class, 'description'])->name('description');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
