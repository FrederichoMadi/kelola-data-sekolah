<?php

use App\Http\Controllers\{AdminController, CourseController, HomeController, JournalController, TeacherController, SchoolController, ToolController};
use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group( function () {
    
    Route::prefix('teachers')->group(function(){
        Route::get('/', [TeacherController::class, 'index'])->name('guru/dashboard');
        // searching
        Route::get('cari', [TeacherController::class, 'cari'])->name('guru.cari');
        // eport excel
        Route::get('export_excel', [TeacherController::class, 'export_excel'])->name('guru.excel');
        // tambah guru
        Route::get('tambah', [TeacherController::class, 'tambah'])->name('guru/tambah');
        Route::post('tambah', [TeacherController::class, 'store']);
        // edit guru
        Route::get('{teacher:slug}/edit', [TeacherController::class, 'edit'])->name('guru.edit');
        Route::put('{teacher:slug}/edit', [TeacherController::class, 'update']);
        // hapus guru
        Route::delete('{teacher:slug}/delete', [TeacherController::class, 'destroy'])->name('guru.delete');

    });

    Route::prefix('schools')->group(function(){
        Route::get('/', [SchoolController::class, 'index'])->name('school');
        //tambah data 
        // Route::get('tambah', [SchoolController::class, 'tambah'])->name('school.tambah');
        // Route::post('tambah', [SchoolController::class, 'store']);
        // edit sekolah
        Route::get('{school:slug}/edit', [SchoolController::class, 'edit'])->name('school.edit');
        Route::put('{school:slug}/edit', [SchoolController::class, 'update']);

    });

    Route::prefix('journals')->group(function(){
        Route::get('/', [JournalController::class, 'index'])->name('journal');
        // searching
        Route::get('cari', [JournalController::class, 'cari'])->name('journal.cari');
        // eport excel
        Route::get('export_excel', [JournalController::class, 'export_excel'])->name('journal.excel');
        // tambah berita sekolah
        Route::get('tambah', [JournalController::class, 'tambah'])->name('tambah');
        Route::post('tambah', [JournalController::class, 'store']);
        // edit berita sekolah
        Route::get('{journal:slug}/edit', [JournalController::class , 'edit'])->name('edit');
        Route::put('{journal:slug}/edit', [JournalController::class , 'update']);
        // hapus berita sekolah
        Route::delete('{journal:slug}/delete', [JournalController::class, 'destroy'])->name('delete');
    });

    Route::prefix('tools')->group( function () {
        Route::get('/', [ToolController::class, 'index'])->name('tool');
        // searching
        Route::get('cari', [ToolController::class, 'cari'])->name('tool.cari');
        // eport excel
        Route::get('export_excel', [ToolController::class, 'export_excel'])->name('tool.excel');
        // tambah peralatan
        Route::get('tambah', [ToolController::class, 'tambah'])->name('tool.tambah');
        Route::post('tambah', [ToolController::class, 'store']);
        // edit perlatan
        Route::get('{tool:slug}/edit', [ToolController::class, 'edit'])->name('tool.edit');
        Route::put('{tool:slug}/edit', [ToolController::class, 'update']);
        // hapus
        Route::delete('{tool:slug}/hapus', [ToolController::class, 'delete'])->name('tool.hapus');
    });

    Route::prefix('courses')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('course');
        // searching
        Route::get('cari', [CourseController::class, 'cari'])->name('course.cari');
        // tambah data
        Route::get('tambah', [CourseController::class, 'tambah'])->name('course.tambah');
        Route::post('tambah', [CourseController::class, 'store']);
        // edit perlatan
        Route::get('{course:slug}/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::put('{course:slug}/edit', [CourseController::class, 'update']);
        // hapus
        Route::post('{course:slug}/hapus', [CourseController::class, 'delete'])->name('course.delete');
        // eport excel
        Route::get('export_excel', [CourseController::class, 'export_excel'])->name('course.excel');
    });
});

