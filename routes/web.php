<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use Spatie\Sitemap\SitemapGenerator;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE, PATCH');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Auth::routes();
Route::get('/index/clear-cache', function() {
    echo $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {

    Route::get('/signin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/signin', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    
    Route::get('/signup', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/signup', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

    Route::group(['middleware' => ['auth','role:super-admin|admin']], function () {
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        
        //Users
        Route::get('/users', [App\Http\Controllers\Administrator\UserController::class, 'index'])->name('admin-users');
        Route::get('/user/{id}', [App\Http\Controllers\Administrator\UserController::class, 'show'])->name('admin-user');
        Route::post('/save-user', [App\Http\Controllers\Administrator\UserController::class, 'save'])->name('admin-save-user');
        Route::get('/delete-user/{id}', [App\Http\Controllers\Administrator\UserController::class, 'delete'])->name('admin-delete-user');

        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');

        //Courses
        Route::get('/courses', [App\Http\Controllers\Administrator\CourseController::class, 'index'])->name('admin-courses');
        Route::get('/add-course', [App\Http\Controllers\Administrator\CourseController::class, 'Add'])->name('admin-add-course');
        Route::get('/show-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'show'])->name('admin-show-course');
        Route::post('/save-course', [App\Http\Controllers\Administrator\CourseController::class, 'save'])->name('admin-save-course');
        Route::get('/delete-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'delete'])->name('admin-delete-course');

        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');

        //Ad Page
        Route::get('/ad-pages', [App\Http\Controllers\Administrator\AdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'delete'])->name('admin-ad-delete-page');
    
        //Products
        Route::get('/products', [App\Http\Controllers\Administrator\ProductController::class, 'index'])->name('admin-products');
        Route::get('/add-product', [App\Http\Controllers\Administrator\ProductController::class, 'Add'])->name('admin-add-product');
        Route::get('/view-product/{id}', [App\Http\Controllers\Administrator\ProductController::class, 'show'])->name('admin-view-product');
        Route::post('/save-product', [App\Http\Controllers\Administrator\ProductController::class, 'save'])->name('admin-save-product');
        Route::get('/delete-product/{id}', [App\Http\Controllers\Administrator\ProductController::class, 'delete'])->name('admin-delete-product');

        //Category
        Route::get('/categories', [App\Http\Controllers\Administrator\CategoryController::class, 'index'])->name('admin-categories');
        Route::get('/add-category', [App\Http\Controllers\Administrator\CategoryController::class, 'Add'])->name('admin-add-category');
        Route::get('/view-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'show'])->name('admin-view-category');
        Route::post('/save-category', [App\Http\Controllers\Administrator\CategoryController::class, 'save'])->name('admin-save-category');
        Route::get('/delete-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'delete'])->name('admin-delete-category');

        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
        Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-job');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');
        
        Route::get('/jobs', [App\Http\Controllers\Administrator\JobController::class, 'index'])->name('admin-jobs');
        Route::get('/add-job', [App\Http\Controllers\Administrator\JobController::class, 'add'])->name('admin-add-job');
        Route::get('/view-job/{id}', [App\Http\Controllers\Administrator\JobController::class, 'show'])->name('admin-view-job');
        Route::post('/save-job', [App\Http\Controllers\Administrator\JobController::class, 'save'])->name('admin-save-job');
        Route::get('/delete-job/{id}', [App\Http\Controllers\Administrator\JobController::class, 'delete'])->name('admin-delete-job');
        
        Route::get('/gallery', [App\Http\Controllers\Administrator\GalleryController::class, 'index'])->name('admin-gallery');
        Route::get('/add-gallery', [App\Http\Controllers\Administrator\GalleryController::class, 'add'])->name('admin-add-gallery');
        Route::get('/view-gallery/{id}', [App\Http\Controllers\Administrator\GalleryController::class, 'show'])->name('admin-view-gallery');
        Route::post('/save-gallery', [App\Http\Controllers\Administrator\GalleryController::class, 'save'])->name('admin-save-gallery');
        Route::get('/delete-gallery/{id}', [App\Http\Controllers\Administrator\GalleryController::class, 'delete'])->name('admin-delete-gallery');
        
    });

    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::get('/manage-roles', [App\Http\Controllers\Administrator\AccessibilityController::class, 'index'])->name('manage-roles');
        Route::get('/create-accessibility', [App\Http\Controllers\Administrator\AccessibilityController::class, 'createAccessibility'])->name('role-master');
        Route::get('/edit-accessibility/{id}', [App\Http\Controllers\Administrator\AccessibilityController::class, 'show'])->name('edit-accessibility');
        Route::post('/save-accessibility', [App\Http\Controllers\Administrator\AccessibilityController::class, 'saveAccessibility'])->name('save-accessibility');
        Route::get('/assign-role/{id}', [App\Http\Controllers\Administrator\AssignRoleController::class, 'index'])->name('assign-role.index');
        Route::post('/assign-role', [App\Http\Controllers\Administrator\AssignRoleController::class, 'save'])->name('assign-role.save');
    });

    
});


Route::group(['middleware' => ['auth']], function () {
    
});

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('web');
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)')->name('page');
Route::get('/ads/{slug}', [App\Http\Controllers\AdPageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/category/{slug}', [App\Http\Controllers\ProductController::class, 'productListByCategory'])->name('course-category');
Route::get('/products/{slug}', [App\Http\Controllers\ProductController::class, 'productListByCategory'])->name('view-products');
Route::get('/product/{slug}', [App\Http\Controllers\ProductController::class, 'view'])->name('view-product');
Route::get('/search/{slug}', [App\Http\Controllers\ProductController::class, 'search'])->name('search-products');
Route::post('/capture-lead', [App\Http\Controllers\IndexController::class, 'captureLead'])->name('insert-lead-records');
Route::post('/capture-contact-lead', [App\Http\Controllers\IndexController::class, 'contactCaptureLead'])->name('insert-capture-contact-leads');