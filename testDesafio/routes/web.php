<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $alunos = Student::all();
    return view('main', ['alunos' => $alunos]);
});

Route::get('/cadastro', function(){
    return view('register-page');
});

Route::post('/cadastrar', [AdminController::class, 'createStudent']);

Route::get('/editar-aluno/{aluno}', [AdminController::class, 'goEditPage']);

Route::put('/editar-aluno/{aluno}', [AdminController::class, 'editStudent']);

Route::delete('/excluir-aluno/{aluno}', [AdminController::class, 'deleteStudent']);