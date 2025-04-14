<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="/editar-aluno/{{$aluno->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome?</label>
        <input name="nome" type="text" value="{{$aluno->nome}}">
        <label for="email">Mail?</label>
        <input name="email" type="text" value="{{$aluno->email}}">
        <button>Confirmar</button>
    </form>
</body>
</html>