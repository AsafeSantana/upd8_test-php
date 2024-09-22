# Cadastro de Clientes, Cidades e Representantes

## Tecnologias
- PHP
- Laravel
- MySQL

## Clonando o Repositório
Para clonar este repositório, utilize o seguinte comando no terminal:

```bash
git clone https://seu-repositorio-url.git
cd nome-do-repositorio
  ```

## Instalação
Criar o Banco de Dados Execute o comando abaixo para criar as tabelas necessárias no banco de dados:

```bash
php artisan migrate
```

## Popular o Banco de Dados Em seguida, execute o comando para inserir alguns exemplos de "Cidades":

```bash
php artisan db:seed
 ```
## Acessando a Aplicação
Depois de configurar o banco de dados, inicie o servidor local:

```bash
php artisan serve
```

## Agora você pode acessar a aplicação em seu navegador utilizando as seguintes URLs:

- Clientes : http://127.0.0.1:8000/clientes
- Representantes : http://127.0.0.1:8000/representantes
- Cidades : http://127.0.0.1:8000/cidades

## Funcionalidades
Na aplicação, você poderá:

- Criar, alterar e excluir clientes.
- Criar, alterar e excluir representantes.
- Criar, alterar e excluir cidades.
