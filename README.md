# Projeto de Cadastro

## Tecnologias Utilizadas
- **PHP**
- **Laravel**
- **MySQL**

## Instruções para Início

1. **Criar o Banco de Dados**
   Execute o seguinte comando no terminal para criar a estrutura do banco de dados:

   ```bash
   php artisan migrate
Popular o Banco de Dados Após criar as tabelas, rode o comando a seguir para inserir exemplos de "Cidades":

bash
Copiar código
php artisan db:seed
Acessar a Aplicação Abra o navegador e utilize as seguintes URLs locais para acessar o frontend da aplicação:

http://127.0.0.1:8000/clientes
http://127.0.0.1:8000/representantes
http://127.0.0.1:8000/cidades
Nestas páginas, você poderá:

Criar
Alterar
Excluir
Listar Clientes, Representantes e Cidades
Considerações Finais
Certifique-se de ter o ambiente configurado corretamente para rodar aplicações Laravel. Para mais informações, consulte a documentação do Laravel.