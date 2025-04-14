<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <h1>Alunos cadastrados</h1>
    <form action="/cadastro" method="GET">
        <button>Cadastrar novo aluno</button>
    </form>
    
    <div>
        @if(empty($alunos) || $alunos->isEmpty())
        <p>Nao ha nenhum aluno cadastrado</p>
        @else
        @foreach($alunos as $aluno)
        <div class="info-aluno">
            <h3>{{ $aluno->nome }}&nbsp; matricula: {{ $aluno->id }}</h3>
            <p>
                Email: {{ $aluno->email }}<br>
                CPF: {{ $aluno->cpf }}
            </p>
            <p><a href="/editar-aluno/{{ $aluno->id }}">Editar Aluno</a></p>
            <form action="/excluir-aluno/{{ $aluno->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Excluir Aluno</button>
            </form>
        </div>
        @endforeach
        @endif
    </div>
</body>
</html>