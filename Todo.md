## Tasks
1. Criar esqueleto da pagina initial (a.k.a pagina que lista os alunos cadastrados);
2. Criar base de dados que comporta os alunos cadastrados;
3. Criar funçao responsavel pelo cadastro de um aluno;
4. Funçao responsavel pela ediçao de um aluno;
5. Funçao responsavel por deletar um ou mais alunos
6. Revisar nivel de segurança

## Tests
- criaçao de aluno com campo vazio;
- deletar um aluno mais de uma vez;

## Base de dados

Elementos:
    - Nome (String, editavel);
    - Email (string, editavel);
    - matricula (int, primary key, nao-editavel);
    - CPF (int, unique, nao-editavel)