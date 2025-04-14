<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createStudent(Request $dados){
        $infoCadastro = $dados -> validate([
            'nome' => 'required',
            'email' => ['required', 'email'],
            'cpf' => ['required', 'min:11', 'max:11']
        ]);

        Student::create($infoCadastro);
        return redirect('/');
    }

    public function editStudent(Student $aluno, Request $ndados) {
        $ninfo = $ndados ->validate([
            'nome' => 'required',
            'email' => ['required', 'email'],
        ]);
        
        $aluno ->update($ninfo);
        return redirect('/');
    }

    public function deleteStudent(Student $aluno){
        $aluno->delete();
        return redirect('/');
    }

    public function goEditPage(Student $aluno){
        return view('edit-page', ['aluno' => $aluno]);
    }

}
