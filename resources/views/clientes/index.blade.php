<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
            margin-top: 30px;
        
        }

        /* Estilos do formulário */
        .form-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            border: 2px solid black;
        }

        .form-container h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 1px;
        }

        .form-group.cpf-nome {
            margin-right: 5px;
        }



        label {
            font-size: 0.9rem;
            flex: 0 0 120px;
            /* Label menor */
            margin-right: -70px;
            /* Reduz o espaço entre o label e o campo */
            white-space: nowrap;
            color: black;
            font-weight: bold;

            /* Para negrito */

            /* Para preto */

        }

        .label-cpf {
            margin-right: -85px;
            
            /* Ajuste conforme necessário */
        }

        .label-nome {
            margin-right: -70px;
            margin-left: -80px;
            /* Ajuste o valor conforme necessário */

            /* Ajuste conforme necessário */
        }

        .label-data-nascimento {
            margin-right: 8px;
            margin-left: -50px;
            /* Ajuste conforme necessário */
        }

        .label-sexo {
            margin-right: -250px;
            margin-left: -15px;
            ;
            /* Ajuste conforme necessário */
        }

        .label-estado {
            margin-left: -110px;
            margin-right: 50px;
        }

        .label-endereco {
            margin-right: 5px;
            /* Ajuste o espaço entre o label e o campo */
            white-space: nowrap;
            /* Evita quebra de linha */
        }

        .label-cidade {
            margin-right: -20px;
            margin-left: -100px;
        }

        .endereco-input {
            margin-left: -50px;
            margin-right: 120px;
        }

        /* Ajusta o tamanho dos campos de entrada (comboboxes) */
        #cpf {
            max-width: 130px;
            /* Define largura máxima menor */
        }

        #data_nascimento {
            max-width: 120px;

            /* Define largura máxima menor */

        }

        #nome {
            max-width: 220px;
            /* Define largura máxima menor */
        }

        #estado {
            margin-left: -110px;
            margin-right: 120px;
            /* Ajuste o valor conforme necessário */
        }

        #cidade_id {
            margin-left: -40px;
            margin-right: 100px;
        }

        #masculino {
            margin-left: 30px;
            margin-right: 1px;
        }

        #feminino {
            margin-left: -70px;

        }

        .form-container h6 {
            color: #451cb5;
            /* Cor desejada */
        }

        .custom-reset-btn {
            background-color: #6c757d;
            /* Cor de fundo do botão Limpar */
            border: none;
            /* Remove a borda */
            border-radius: 10px;
            /* Bordas arredondadas */
            padding: 10px 20px;
            /* Padding personalizado */
            color: white;
            /* Cor do texto */
            transition: background-color 0.3s;
            /* Efeito de transição */
            margin-left: 10px;
        }

        .custom-reset-btn:hover {
            background-color: #d3d3d3;
            /* Cor de fundo ao passar o mouse */
        }

        .custom-save-btn {
            background-color: #000080;
            /* Cor de fundo do botão Salvar */
            border: none;
            /* Remove a borda */
            border-radius: 10px;
            /* Bordas arredondadas */
            padding: 10px 20px;
            /* Padding personalizado */
            color: white;
            /* Cor do texto */
            transition: background-color 0.3s;
            /* Efeito de transição */
        }

        .custom-save-btn:hover {
            background-color: #0056b3;
            /* Cor de fundo ao passar o mouse */
        }


        .logo {
            max-width: 150px;
            /* ajuste conforme necessário */
            height: auto;
        }




        .form-control,
        select {
            flex: 1;
            max-width: 400px;
            border-radius: 15px;
            border: 2px solid black;
        }

        .form-check {
            display: flex;
            margin-left: 150px;
        }

        /* Estilos da tabela */
        .table-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .btn-actions {
            display: flex;
            justify-content: space-around;
        }

        /* Ajustes dos botões */
        .form-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-row .btn {
            margin-top: 10px;
        }

        /* Estilização dos Botões */
        .custom-search-btn {
            background-color: #000080;
            /* Cor de fundo azul */
            color: white;
            /* Cor do texto */
            border: none;
            /* Remove a borda padrão */
            padding: 10px 20px;
            /* Espaçamento interno */
            border-radius: 10px;
            /* Bordas arredondadas */
            cursor: pointer;
            /* Muda o cursor para indicar que é clicável */
            transition: background-color 0.3s;
            /* Efeito de transição */

            margin-left: 200px;
        }

        .custom-search-btn:hover {
            background-color: #0056b3;
            /* Cor de fundo ao passar o mouse */
        }

        .custom-reset-btn {
            background-color: #6c757d;
            /* Cor de fundo cinza */
            color: white;
            /* Cor do texto */
            border: none;
            /* Remove a borda padrão */
            padding: 10px 20px;
            /* Espaçamento interno */
            border-radius: 10px;
            /* Bordas arredondadas */
            cursor: pointer;
            /* Muda o cursor para indicar que é clicável */
            transition: background-color 0.3s;
            /* Efeito de transição */
        }

        .custom-reset-btn:hover {
            background-color: #5a6268;
            /* Cor de fundo ao passar o mouse */
        }

        .label-nome-busca {
            margin-left: -70px;
        }

        .label-data-nascimento-busca {
            margin-left: -40px;
        }

        .data-nascimento-busca {
            margin-left: 75px;
        }

        .cpf-busca {
            margin-left: -8px;
        }

        #masculino-busca {
            margin-left: -150px;
        }

        #feminino-busca {
            margin-left: -200px;
        }

        .label-estado-busca {
            margin-right: 50px;
        }

        .estado-busca {
            margin-right: -8px;
            margin-left: -110px;
        }

        .label-cidade-busca {
            margin-left: 25px;
        }

        #cidade_id-busca {
            margin-right: 60px;
            margin-left: 10px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination .page-item {
            display: inline-block;
            padding: 8px 12px;
            border: 1px solid #007bff;
            /* Cor da borda */
            color: #007bff;
            /* Cor do texto */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination .page-item:hover {
            background-color: #007bff;
            /* Cor de fundo ao passar o mouse */
            color: #fff;
            /* Cor do texto ao passar o mouse */
        }

        .pagination .disabled .page-item {
            color: #ccc;
            /* Cor do texto para itens desativados */
            border-color: #ccc;
            /* Cor da borda para itens desativados */
        }

        .pagination .active .page-item {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
        .h6-resultados {
    color: #214ad4 !important;
}
.table-light-gray {
            background-color: #ffffff;
            color: black
        }

        .table-header-custom {
            background-color: #d3d3d3;
            color: black;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="main-container" style="padding: 40px; background-color:#ffffff; border-radius: 30px; box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); border: 2px solid black; ">

            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left:20px">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="form-container">
                <h6 class="mb-3">{{ isset($cliente) ? 'Editar Cliente' : 'Cadastrar Cliente' }}</h6>
                <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
                    @csrf
                    @if(isset($cliente))
                    @method('PUT')
                    @endif

                    <div class="form-row">
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="cpf" class="label-cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="555.555.000-00" value="{{ $cliente->cpf ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="nome" class="label-nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="data_nascimento" class="label-data-nascimento">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $cliente->data_nascimento ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="label-sexo">Sexo:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino" {{ (isset($cliente) && $cliente->sexo == 'Masculino') ? 'checked' : '' }}>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino" {{ (isset($cliente) && $cliente->sexo == 'Feminino') ? 'checked' : '' }}>
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="endereco" class="label-endereco">Endereço:</label>
                            <input type="text" class="form-control endereco-input" id="endereco" name="endereco" value="{{ $cliente->endereco ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="estado" class="label-estado">Estado:</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value="" selected disabled>Selecione</option>
                                @foreach ($estados as $estado)
                                <option value="{{ $estado->estado }}" {{ (isset($cliente) && $cliente->cidade->estado == $estado->estado) ? 'selected' : '' }}>{{ $estado->estado }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cidade_id" class="label-cidade">Cidade:</label>
                            <select class="form-control" id="cidade_id" name="cidade_id" required>
                                <option value="" selected disabled>Selecione</option>
                                @foreach ($cidades as $cidade)
                                <option value="{{ $cidade->id }}" {{ (isset($cliente) && $cliente->cidade_id == $cidade->id) ? 'selected' : '' }}>{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    
                    <div class="form-row justify-content-end">
                        <button type="submit" class="btn btn-primary custom-save-btn">Salvar</button>
                        <button type="reset" class="btn btn-secondary mr-2 custom-reset-btn">Limpar</button>
                    </div>
                </form>
            </div>

            
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; margin-bottom: 10px; margin-left:20px">

            <div class="form-container">
                <h6 class="mb-3">Consultar Cliente</h6>
                <form action="{{ route('clientes.index') }}" method="GET">
                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cpf" class="label-cpf-busca">CPF:</label>
                            <input type="text" class="form-control cpf-busca" id="cpf" name="cpf" placeholder="555.555.000-00">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nome" class="label-nome-busca">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="data_nascimento" class="label-data-nascimento-busca">Data de Nascimento:</label>
                            <input type="date" class="form-control data-nascimento-busca" id="data_nascimento" name="data_nascimento">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="label-sexo-busca">Sexo:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino-busca" value="Masculino" {{ (isset($cliente) && $cliente->sexo == 'Masculino') ? 'checked' : '' }}>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino-busca" value="Feminino" {{ (isset($cliente) && $cliente->sexo == 'Feminino') ? 'checked' : '' }}>
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="estado" class="label-estado-busca">Estado:</label>
                            <select class="form-control estado-busca" id="estado-busca" name="estado">
                                <option value="">Todos</option>
                                @foreach ($estados as $estado)
                                <option value="{{ $estado->estado }}">{{ $estado->estado }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade_id" class="label-cidade-busca">Cidade:</label>
                            <select class="form-control" id="cidade_id-busca" name="cidade_id">
                                <option value="">Todos</option>
                                @foreach ($cidades as $cidade)
                                <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5 text-right">
                            
                            <button type="submit" class="btn btn-primary custom-search-btn">Pesquisar</button>
                            <button type="reset" class="btn btn-secondary mr-2 custom-reset-btn">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>


            @if(isset($clientes) && $clientes->isNotEmpty())
            <div class="form-container">
                <h6 class="mb-3 h6-resultados">Resultados da Busca</h6>
                <table class="table table-bordered table-striped">
                    <thead class="table-header-custom">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Cliente</th>
                            <th>CPF</th>
                            <th>Data Nasc.</th>
                            <th>Estado</th>
                            <th>Cidade</th>
                            <th>Sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr class="table-light-gray">
                            <td style="width: 60px;">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-success btn-sm">Editar</a>
                            </td>
                            <td style="width: 60px;">
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->data_nascimento ? \Carbon\Carbon::parse($cliente->data_nascimento)->format('d/m/Y') : 'N/A' }}</td>
                            <td>{{ $cliente->cidade ? $cliente->cidade->estado : 'N/A' }}</td>
                            <td>{{ $cliente->cidade->nome  }}</td>
                            <td>{{ $cliente->sexo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Navegação de páginas --}}
                <div class="mt-3">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            @if ($clientes->onFirstPage())
                            <li class="disabled"><span class="page-item">&laquo;</span></li>
                            @else
                            <li><a href="{{ $clientes->previousPageUrl() }}" class="page-item">&laquo;</a></li>
                            @endif

                            @for ($i = 1; $i <= $clientes->lastPage(); $i++)
                                @if ($i == $clientes->currentPage())
                                <li class="active"><span class="page-item">{{ $i }}</span></li>
                                @else
                                <li><a href="{{ $clientes->url($i) }}" class="page-item">{{ $i }}</a></li>
                                @endif
                                @endfor

                                @if ($clientes->hasMorePages())
                                <li><a href="{{ $clientes->nextPageUrl() }}" class="page-item">&raquo;</a></li>
                                @else
                                <li class="disabled"><span class="page-item">&raquo;</span></li>
                                @endif
                        </ul>
                    </nav>
                </div>
            </div>
            @endif