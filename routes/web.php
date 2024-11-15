<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagementPageController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPageController;
use App\Http\Controllers\ProjectPresentationController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Middleware\LanguageSwitcher;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware(LanguageSwitcher::class);

Route::get('/login', function () {
    return redirect('/admin/login');
});

Route::get('/panel', function () {
    return redirect('/admin/panel');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.auth');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::prefix('admin')->middleware(IsAdminMiddleware::class)->group(function () {
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
});

Route::get('/activity', [ActivityController::class, 'activity_list'])->name('get.activity');
Route::get('/project', [ProjectController::class, 'project_list'])->name('get.project');

Route::get('/projects', [ProjectPageController::class, 'index'])->name('projects.page');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us.page');
Route::get('/management', [ManagementPageController::class, 'index'])->name('management.page');

Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('/project-presentation', [ProjectPresentationController::class, 'store'])->name('project.presentation.store');
