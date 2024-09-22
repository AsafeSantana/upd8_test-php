<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Representantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
            margin-top: 30px;

            /* Adiciona borda preta */
        }

        .form-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            border: 2px solid black;
            /* Adiciona borda preta */
        }

        .form-container h6 {
            color: #451cb5;
        }

        label {
            font-size: 0.9rem;
            color: black;
    font-weight: bold;
        }

        label[for="data_nascimento"] {
            white-space: nowrap;
        }

        .custom-save-btn {
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s;
            margin-left: 700px;
        }

        .custom-reset-btn {
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s;
            margin-left: 40px;
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

        .custom-search-btn {
            background-color: #000080;
            color: white;
            border-radius: 5px;
            margin-left: 10px;
        }

        .custom-search-btn:hover {
            background-color: #0056b3;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid black; 
        }

        .form-control-date {
            width: 100px;
            /* Ajustado para um melhor visual */
            margin-left: -5px;

        }

        .sexo-container {
            margin-left: 0px;
        }

        .form-check-input {
            border-radius: 50%;
            /* Torna o checkbox redondo */
        }

        .table-light-gray {
            background-color: #ffffff;
            color: black
                /* Cinza claro */
        }

        .table-header-custom {
            background-color: #d3d3d3;
            /* Cor de fundo desejada */
            color: black;
            /* Cor do texto */
        }


        .h6-resultados {
    color: #214ad4 !important;
}

    </style>
</head>

<body>
    <div class="container">
        <div class="main-container" style="padding: 40px; background-color:#ffffff; border-radius: 30px; box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); border: 2px solid black;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left: 20px;">


            <!-- Mensagem de Sucesso -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif



            <!-- Bloco de Cadastro de Representantes -->
            <div class="form-container">
                <h6 class="mb-3">{{ isset($representante) ? 'Editar Representante' : 'Cadastrar Representante' }}</h6>
                <form action="{{ isset($representante) ? route('representantes.update', $representante->id) : route('representantes.store') }}" method="POST">
                    @csrf
                    @if(isset($representante))
                    @method('PUT')
                    @endif

                    <div class="form-row align-items-center">
                        <div class="form-group col-md-3 d-flex align-items-center">
                            <label for="cpf" class="mr-2 mb-0">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="555.555.000-00" value="{{ old('cpf', $representante->cpf ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-3 d-flex align-items-center">
                            <label for="nome" class="mr-2 mb-0">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $representante->nome ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-3 d-flex align-items-center">
                            <label for="data_nascimento" class="mr-2 mb-0">Data de Nascimento:</label>
                            <input type="date" class="form-control form-control-date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento', $representante->data_nascimento ?? '') }}" required>
                        </div>

                        <!-- Campo Sexo -->
                        <div class="form-group col-md-3 d-flex align-items-center sexo-container">
                            <label class="mr-2 mb-0">Sexo:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino" {{ (old('sexo', $representante->sexo ?? '') == 'Masculino') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino" {{ (old('sexo', $representante->sexo ?? '') == 'Feminino') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row align-items-center">
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="endereco" class="mr-2 mb-0">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco', $representante->endereco ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="cidade_id" class="mr-2 mb-0 ">Cidade:</label>
                            <select class="form-control" id="cidade_id" name="cidade_id" required style="width: 180px;">
                                @foreach ($cidades as $cidade)
                                <option value="{{ $cidade->id }}" {{ (isset($representante) && $representante->cidade_id == $cidade->id) ? 'selected' : '' }}>{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary custom-save-btn">Salvar</button>
                            <button type="reset" class="btn btn-secondary custom-reset-btn">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>

            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left: 20px;">

            <!-- Bloco de Consulta de Representantes -->
            <div class="form-container">
                <h6 class="mb-3">Consultar Representantes</h6>
                <form action="{{ route('representantes.index') }}" method="GET">
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label for="consulta_nome" class="mr-2 mb-0">Nome:</label>
                            <input type="text" class="form-control" id="consulta_nome" name="nome" placeholder="555.555.555-00">
                        </div>
                        <div class="form-group col-md-5 d-flex align-items-center">
                            <label class="mr-2 mb-0">Sexo:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="sexo[]" id="masculino" value="Masculino">
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="sexo[]" id="feminino" value="Feminino">
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary custom-save-btn custom-search-btn">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>


            @if(isset($representantes) && $representantes->isNotEmpty())
            <div class="form-container">
                <h6 class="mb-3 h6-resultados">Resultados da Pesquisa</h6>
                <table class="table table-bordered table-striped">
                    <thead class="table-header-custom">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($representantes as $representante)
                        <tr class="table-light-gray">
                            <td style="width: 60px;">
                                <a href="{{ route('representantes.edit', $representante->id) }}" class="btn btn-success btn-sm">Editar</a>
                            </td>
                            <td style="width: 60px;">
                                <form action="{{ route('representantes.destroy', $representante->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                            <td>{{ $representante->nome }}</td>
                            <td>{{ $representante->sexo }}</td>
                            <td>{{ $representante->cidade->nome }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Navegação de páginas --}}
                <div class="mt-3 d-flex justify-content-center">
                    {{ $representantes->links('pagination::bootstrap-4') }} {{-- Links de paginação com Bootstrap 4 --}}
                </div>
            </div>
            @endif

        </div>
    </div>
</body>

</html>