<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Aluno</title>
</head>
<body>
    <h2>Cadastro Aluno</h2>
    <form action="/cadastrar" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input name="nome" type="text" placeholder="nome">
        <label for="email">Email</label>
        <input name="email" type="text" placeholder="email">
        <label for="cpf">CPF</label>
        <input name="cpf" type="int" placeholder="cpf">
        <button>Cadastrar</button>
    </form>
</body>
</html>