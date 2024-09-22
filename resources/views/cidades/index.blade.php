<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
            margin-top: 30px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            border: 2px solid black;
        }

        .form-container h6 {
            color: #5f4e5f;
        }

        label {
            font-size: 0.9rem;
            color: black;
            font-weight: bold;
        }

        .custom-save-btn,
        .custom-reset-btn {
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .custom-save-btn {
            background-color: #000080;
            color: white;
        }

        .custom-save-btn:hover {
            background-color: #0056b3;
        }

        .custom-reset-btn {
            background-color: #6c757d;
            color: white;
        }

        .custom-reset-btn:hover {
            background-color: #5a6268;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid black;
        }

        .table-light-gray {
            background-color: #ffffff;
            color: black;
        }

        .table-header-custom {
            background-color: #d3d3d3;
            color: black;
        }

        .h6-resultados {
            color: #214ad4 !important;
        }
        .form-container h6 {
            color: #451cb5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-container" style="padding: 40px; background-color:#ffffff; border-radius: 30px; box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); border: 2px solid black;">

            <!-- Mensagem de Sucesso -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left: 20px;">


            <!-- Bloco de Cadastro de Cidades -->
            <div class="form-container">
                <h6 class="mb-3">Cadastrar Cidade</h6>

                <form action="{{ isset($cidade) ? route('cidades.update', $cidade->id) : route('cidades.store') }}" method="POST">
                    @csrf
                    @if(isset($cidade))
                    @method('PUT')
                    @endif
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="nome" class="mr-2 mb-0">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $cidade->nome ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-4 d-flex align-items-center">
                            <label for="estado" class="mr-2 mb-0">Estado:</label>
                            <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $cidade->estado ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-2">
                        <div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary custom-save-btn">Salvar</button>
    <button type="reset" class="btn btn-secondary custom-reset-btn" style="margin-left: 10px;">Limpar</button>
</div>

                        </div>
                    </div>
                </form>
            </div>

            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left: 20px;">

            <!-- Bloco de Consulta de Cidades -->
            <div class="form-container">
                <h6 class="mb-3">Consultar Cidades</h6>
                <form action="{{ route('cidades.index') }}" method="GET">
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="consulta_nome" class="mr-2 mb-0">Nome:</label>
                            <input type="text" class="form-control" id="consulta_nome" name="nome" placeholder="Nome da cidade">
                        </div>
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="consulta_estado" class="mr-2 mb-0">Estado:</label>
                            <select class="form-control" id="consulta_estado" name="estado">
                                <option value="">Selecionar</option>
                                @foreach ($estados as $estado)
                                <option value="{{ $estado }}">{{ $estado }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary custom-save-btn">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>

            @if(isset($cidades) && $cidades->isNotEmpty())
            <div class="form-container">
                <h6 class="mb-3 h6-resultados">Resultados da Busca</h6>
                <table class="table table-bordered table-striped">
                    <thead class="table-header-custom">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Nome</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cidades as $cidade)
                        <tr class="table-light-gray">
                            <td style="width: 60px;">
                                <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-success btn-sm">Editar</a>
                            </td>
                            <td style="width: 60px;">
                                <form action="{{ route('cidades.destroy', $cidade->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                            <td>{{ $cidade->nome }}</td>
                            <td>{{ $cidade->estado }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Navegação de páginas --}}
                <div class="mt-3 d-flex justify-content-center">
                    {{ $cidades->links('pagination::bootstrap-4') }} {{-- Links de paginação com Bootstrap 4 --}}
                </div>
            </div>
            @endif

        </div>
    </div>
</body>

</html>
