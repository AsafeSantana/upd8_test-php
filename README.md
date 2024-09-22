<h1>Projeto de Cadastro</h1>

<h2>Tecnologias Utilizadas</h2>
<ul>
    <li><strong>PHP</strong></li>
    <li><strong>Laravel</strong></li>
    <li><strong>MySQL</strong></li>
</ul>

<h2>Instruções para Início</h2>

<ol>
    <li>
        <strong>Criar o Banco de Dados</strong><br>
        Execute o seguinte comando no terminal para criar a estrutura do banco de dados:
        <pre><code>php artisan migrate</code></pre>
    </li>
    <li>
        <strong>Popular o Banco de Dados</strong><br>
        Após criar as tabelas, rode o comando a seguir para inserir exemplos de "Cidades":
        <pre><code>php artisan db:seed</code></pre>
    </li>
    <li>
        <strong>Acessar a Aplicação</strong><br>
        Abra o navegador e utilize as seguintes URLs locais para acessar o frontend da aplicação:
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
