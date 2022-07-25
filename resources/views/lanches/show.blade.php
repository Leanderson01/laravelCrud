<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitrine de Lanches</title>
    <style>
        .btn-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="btn-page">
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                    </tr>
                    @foreach ($lanches as $lanche)
                        <tr>
                            <td>{{ $lanche->nome }}</td>
                            <td>{{ $lanche->descricao }}</td>
                            <td>R${{ $lanche->preco }}</td>
                            <td>
                                <a href="{{ route('editar_lanche', ['id' => $lanche->id]) }}"
                                    title="Editar {{ $lanche->nome }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('deletar_lanche', ['id' => $lanche->id]) }}"
                                    title="Excluir {{ $lanche->nome }}">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="btn">
                    {{ $lanches->links() }}
                </div>
            </div>
            <button>
                <a href="{{ route('criar_lanche') }}">Cadastrar Lanche</a>
            </button>
        </div>
    </div>
</body>
