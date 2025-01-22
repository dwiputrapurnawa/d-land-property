<?php

use App\Http\Controllers\AboutBaliPageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagementPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsPageController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PhoneCountryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPageController;
use App\Http\Controllers\ProjectPresentationController;
use App\Http\Controllers\UpdateWebController;
use App\Http\Middleware\CheckForUpdates;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Middleware\LanguageSwitcher;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->middleware(LanguageSwitcher::class)->name('home.page');

Route::get('/login', function () {
    return redirect('/admin/login');
});

Route::get('/panel', function () {
    return redirect('/admin/panel');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('admin.login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.auth');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::prefix('admin')->middleware([IsAdminMiddleware::class, CheckForUpdates::class])->group(function () {
    Route::get('/panel', [PanelController::class, 'index'])->name('admin.panel');
    Route::get('/panel/project', [ProjectController::class, 'index'])->name('admin.project');
    Route::get('/panel/company', [CompanyController::class, 'index'])->name('admin.company');
    Route::put('/panel/company/update/{id}', [CompanyController::class, 'update'])->name('admin.company.update');
    Route::get('/panel/project/create', [ProjectController::class, 'create'])->name('admin.project.create');
    Route::post('/panel/project/insert', [ProjectController::class, 'insert'])->name('admin.project.insert');
    Route::get('/panel/project/edit/{slug}', [ProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('/panel/project/update/{id}', [ProjectController::class, 'update'])->name('admin.project.update');
    Route::delete('/panel/project/delete/{id}', [ProjectController::class, 'delete'])->name('admin.project.delete');
    Route::get('/panel/project/publish/{id}', [ProjectController::class, 'publish'])->name('admin.project.publish');
    Route::get('/panel/news', [NewsController::class, 'index'])->name('admin.news');
    Route::get('/panel/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/panel/news/insert', [NewsController::class, 'insert'])->name('admin.news.insert');
    Route::get('/panel/news/publish/{id}', [NewsController::class, 'publish'])->name('admin.news.publish');
    Route::delete('/panel/news/delete/{id}', [NewsController::class, 'delete'])->name('admin.news.delete');
    Route::put('/panel/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::get('/panel/news/edit/{slug}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');
    Route::get('/project', [ProjectController::class, 'project_list'])->name('get.project');
    Route::get('/get-news', [NewsController::class, 'news_list'])->name('get.news');
    Route::get('/get-consultation', [ConsultationController::class, 'consultations_list'])->name('get.consultation');
    Route::get('/get-project-presentation', [ProjectPresentationController::class, 'project_presentation_list'])->name('get.project.presentation');
    Route::get('/update-web', [UpdateWebController::class, 'update'])->name('update.web');
});

Route::get('/projects', [ProjectPageController::class, 'index'])->middleware(LanguageSwitcher::class)->name('projects.page');
Route::get('/projects/{project}', [ProjectPageController::class, 'detail'])->middleware(LanguageSwitcher::class)->name('projects.detail.page');
Route::get('/about-us', [AboutUsController::class, 'index'])->middleware(LanguageSwitcher::class)->name('about.us.page');
Route::get('/about-bali', [AboutBaliPageController::class, 'index'])->middleware(LanguageSwitcher::class)->name('about.bali.page');
Route::get('/news', [NewsPageController::class, 'index'])->middleware(LanguageSwitcher::class)->name('news.page');
Route::get('/news/{news}', [NewsPageController::class, 'detail'])->middleware(LanguageSwitcher::class)->name('news.detail.page');
Route::get('/management', [ManagementPageController::class, 'index'])->middleware(LanguageSwitcher::class)->name('management.page');


Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('/project-presentation', [ProjectPresentationController::class, 'store'])->name('project.presentation.store');

Route::get('/phone-country-codes', [PhoneCountryController::class, 'get_phone_code'])->name('get.phone.codes');

Route::fallback([ErrorController::class, 'error404'])->middleware(LanguageSwitcher::class)->name('error.404');
