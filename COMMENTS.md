# Relatorio Desafio sistema de cadastro

Este desafio representa um sistema de cadastro de matricula de aluno. O projeto foi desenvolvido em PHP utilizando o framework Laravel e utilizando a base de dados SQLite.

## Arquitetura

O projeto é dividio em três blocos principais, se utilizandodo padrão de concepção MVC (Model-View-Controller).

1. No primeiro bloco, o modelo é definido pela classe *web.php*, onde contêm as funções de controle para as operações desejadas, a classe também serve para conectar as classes do bloco écran, com o bloco controle;

2. O segundo bloco, a écran, é composta de três classes *main.blade.php*, *register-page.blade.php* e *edit-page.blade.php*. Essas classes utilizam a ferramenta Blade do Laravel e representam a parte visual das páginas que listam os alunos cadastrados, a página de registro e a página de edição.

3. Por fim o terceiro bloco, o contrôle, é composto de uma única classe chamada *AdminController.php* e tem como função realizar todas as operações logícas da aplicação.

## Bibliotecas Utilizadas

Neste projeto foi-se utilizadas apenas as bibliotecas nativas de laravel et php.

## Possiveis melhorias

- Estética:
    A aplicação falta de um visual mais agradável ao usuário, a utilização de css seria uma malhoria recoméndavel;

- Log In ou chave de confirmação:
    A aplicação não verifica se o usuário que acessa os dados é de fato a adiministrador, seria recomendado uma página inicial de log in ou ao menos uma chave de comfirmação antes da edição ou remoção.

- Reforço na segurança:
    Todas as medidas de segurança utilizada na aplicação são nativas do php/lavarel, é recomendado um reforço nas etapas de verificação, principalmente para o acesso a base de dados.

## Dificuldades

A maior dificuldade encontrada no desenvolvimento desta aplicação foi se acostumar com a utilização do framework laravel. 