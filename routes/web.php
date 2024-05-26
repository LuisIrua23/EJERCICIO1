<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Registro; 
use App\Models\Store;              //crear esta parte 
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {           //primera vista de modulos
    $modules = Module::orderBy('id', 'desc')->get();
    return view('module_carpet.listar',compact('modules'));
});
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('module/listar',[ModuleController::class,'listar'])->name('module.listar');
Route::get('module/create',[ModuleController::class,'create'])->name('module.create');
Route::post('module/store', [ModuleController::class,'store'])->name('module.store');
Route::put('module/{dato}',[ModuleController::class,'update'])->name('module.update');  
Route::delete('module/{dato}',[ModuleController::class,'destroy'])->name('module.destroy');
Route::get('module/{dato}/editar',[ModuleController::class,'edit'])->name('module.edit'); 
Route::get('module/{dato}',[ModuleController::class,'show'])->name('module.show');


Route::get('student/listar',[StudentController::class,'listar'])->name('student.listar');
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('student/store', [StudentController::class,'store'])->name('student.store');
Route::get('student/{dato}',[StudentController::class,'show'])->name('student.show');
Route::put('student/{dato}',[StudentController::class,'update'])->name('student.update');      
Route::delete('student/{dato}',[StudentController::class,'destroy'])->name('student.destroy');
Route::get('student/{dato}/editar',[StudentController::class,'edit'])->name('student.edit');


Route::get('teacher/listar',[TeacherController::class,'listar'])->name('teacher.listar');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/{dato}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{dato}',[TeacherController::class,'update'])->name('teacher.update');      
Route::delete('teacher/{dato}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{dato}/editar',[TeacherController::class,'edit'])->name('teacher.edit');


