# Projeto de Cadastro

## Tecnologias Utilizadas
- **PHP**
- **Laravel**
- **MySQL**

## Clonar o Repositório
1. **Abra o Terminal:** Acesse o terminal no seu computador.
2. **Navegue até o Diretório Desejado:** Use o comando `cd` para navegar até a pasta onde você deseja clonar o repositório. Por exemplo:
   ```bash
   cd /caminho/para/sua/pasta

Clone o Repositório: Use o comando abaixo para clonar o repositório. Substitua <URL do repositório> pela URL real do seu repositório Git:
bash
Copiar código
git clone <URL do repositório>
Entre no Diretório do Projeto: Após o clone, entre no diretório do projeto:
bash
Copiar código
cd nome-do-repositorio
Instruções para Início
Instalar Dependências: Se você ainda não instalou as dependências do Laravel, execute o seguinte comando:

bash
Copiar código
composer install
Criar o Banco de Dados: Execute o seguinte comando no terminal para criar a estrutura do banco de dados:

bash
Copiar código
php artisan migrate
Popular o Banco de Dados: Após criar as tabelas, rode o comando a seguir para inserir exemplos de "Cidades":

bash
Copiar código
php artisan db:seed
Iniciar o Servidor Local: Para iniciar o servidor de desenvolvimento do Laravel, execute:

bash
Copiar código
php artisan serve
O servidor será iniciado e você verá uma mensagem como:

arduino
Copiar código
Starting Laravel development server: http://127.0.0.1:8000
Acessar a Aplicação: Abra o navegador e utilize as seguintes URLs locais para acessar o frontend da aplicação:

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
