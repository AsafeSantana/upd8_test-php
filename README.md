<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto de Cadastro</title>
</head>
<body>
    <h1>Projeto de Cadastro</h1>

    <h2>Tecnologias Utilizadas</h2>
    <ul>
        <li><strong>PHP</strong></li>
        <li><strong>Laravel</strong></li>
        <li><strong>MySQL</strong></li>
    </ul>

    <h2>Clonar o Repositório</h2>
    <ol>
        <li><strong>Abra o Terminal:</strong> Acesse o terminal no seu computador.</li>
        <li><strong>Navegue até o Diretório Desejado:</strong> Use o comando <code>cd</code> para navegar até a pasta onde você deseja clonar o repositório. Por exemplo:
            <pre><code>cd /caminho/para/sua/pasta</code></pre>
        </li>
        <li><strong>Clone o Repositório:</strong> Use o comando abaixo para clonar o repositório. Substitua <code>&lt;URL do repositório&gt;</code> pela URL real do seu repositório Git:
            <pre><code>git clone &lt;URL do repositório&gt;</code></pre>
        </li>
        <li><strong>Entre no Diretório do Projeto:</strong> Após o clone, entre no diretório do projeto:
            <pre><code>cd nome-do-repositorio</code></pre>
        </li>
    </ol>

    <h2>Instruções para Início</h2>
    <ol>
        <li><strong>Instalar Dependências:</strong> Se você ainda não instalou as dependências do Laravel, execute o seguinte comando:
            <pre><code>composer install</code></pre>
        </li>
        <li><strong>Criar o Banco de Dados:</strong> Execute o seguinte comando no terminal para criar a estrutura do banco de dados:
            <pre><code>php artisan migrate</code></pre>
        </li>
        <li><strong>Popular o Banco de Dados:</strong> Após criar as tabelas, rode o comando a seguir para inserir exemplos de "Cidades":
            <pre><code>php artisan db:seed</code></pre>
        </li>
        <li><strong>Iniciar o Servidor Local:</strong> Para iniciar o servidor de desenvolvimento do Laravel, execute:
            <pre><code>php artisan serve</code></pre>
            O servidor será iniciado e você verá uma mensagem como:
            <blockquote>Starting Laravel development server: http://127.0.0.1:8000</blockquote>
        </li>
        <li><strong>Acessar a Aplicação:</strong> Abra o navegador e utilize as seguintes URLs locais para acessar o frontend da aplicação:
            <ul>
                <li><a href="http://127.0.0.1:8000/clientes">http://127.0.0.1:8000/clientes</a></li>
                <li><a href="http://127.0.0.1:8000/representantes">http://127.0.0.1:8000/representantes</a></li>
                <li><a href="http://127.0.0.1:8000/cidades">http://127.0.0.1:8000/cidades</a></li>
            </ul>
            Nestas páginas, você poderá:
            <ul>
                <li>Criar</li>
                <li>Alterar</li>
                <li>Excluir</li>
                <li>Listar Clientes, Representantes e Cidades</li>
            </ul>
        </li>
    </ol>

    <h2>Considerações Finais</h2>
    <p>Certifique-se de ter o ambiente configurado corretamente para rodar aplicações Laravel. Para mais informações, consulte a <a href="https://laravel.com/docs">documentação do Laravel</a>.</p>
</body>
</html>
