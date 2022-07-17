<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Lanche</title>
    <style>
        label {
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>

<body>
    <form action="{{ route('salvar_lanche') }}" method="post">
        @csrf
        <div>
            <label for="nome">Nome do Lanche</label>
            <input type="text" name="nome" id="nome" placeholder="Nome">
        </div>
        <br />
        <div>
            <label for="descricao">Descrição do Lanche</label>
            <input type="text" name="descricao" id="descricao" placeholder="Descrição">
        </div>
        <br />
        <div>
            <label for="preco">Preço do Lanche</label>
            <input type="text" name="preco" id="preco" placeholder="Preço">
        </div>
        <br />
        <button type="submit">Salvar</button>
    </form>
</body>
