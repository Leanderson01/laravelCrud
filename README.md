<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre o Projeto

O projeto consiste em fazer um CRUD utilizando Laravel, e tem como foco a aprendizagem dessa tecnologia em geral.

## Startando Projeto

### 1 - Clonar o projeto;

Utilize o comando Git Clone dentro da pasta onde você quer clonar o repositório;

### 2 - Instalar o Composer

2.1 - Vá no site "https://getcomposer.org/download/";
<br />
2.2 - Escolha o sistema operacional que você usa;
<br />
2.3 - Instale o Composer;

### 3 - No meu caso, utilizei o Docker para subir o serviço MySql:

3.1 - Vá no site "https://www.docker.com/get-started/";
<br />
3.2 - Escolha o sistema operacional que você usa;
<br />
3.3 - Instale o Docker;
<br />
3.4 - Entre na pasta do projeto e use o comando "docker-compose up -d";

### 4 - Criar um banco de dados(Eu usei mysql):

4.1 - No meu caso usei o Workbench para criar;
<br />
4.2 - Abra o Workbench e vá em MySQL Connections e clique no ícone "+";
<br />
4.3 - Digite "crud" no campo Connection Name;
<br />
4.4 - Deixe por padrão o campo Username como root;
<br />
4.5 - Entre na conexão;
<br />
4.6 - Rode o comando "create database crud;";

### 5 - Rodar o Artisan Serve:

5.1 - Abra o terminal dentro da pasta do projeto;
<br />
5.2 - Rode o comando "php artisan serve";

## Usar o crud

### 6 - Inserir dados na tabela:

6.1 - Digitar o seguinte link no seu navegador "http://localhost:8000/lanches/novo";
<br />
6.2 - Insira os dados;
<br />
6.3 - Se tudo estiver correto irá aparecer a mensagem: "Lanche criado com sucesso!";

### 7.1 - Verificar se os dados estão sendo inseridos na table pelo workbench:

7.1.1 - Entre na conexão que você fez no workbench;
<br />
7.1.2 - Rode o comando "use crud;";
<br />
7.1.3 - Rode o comando "select from \* lanches;";

### 7.2 - Verificar se os dados estão sendo inseridos na table pela web:

7.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";

### 8.1 - Verificar tabela com dados no workbench:

8.1.1 - Entre na conexão que você fez no workbench;
<br />
8.1.2 - Rode o comando "use crud;";
<br />
8.1.3 - Rode o comando "select from \* lanches;";

### 8.2 - Verificar tabela com dados na web:

8.1.1- Entrar na rota "http://localhost:8000/lanches/ver";

### 9 - Editar dados da tabela:

9.1 - Entrar na rota "http://localhost:8000/lanches/ver";
<br />
9.2 - Escolher o item que você quer editar;
<br />
9.3 - Clicar no botão Editar, você redirecionado para página de edição;
<br />
9.4 - Escolha o campo que você deseja alterar;
<br />
9.5 - Clique em salvar, se tudo estiver certo vai aparecer a mensagem: "Lanche atualizado com sucesso!";

### 10.1 - Verificar se os dados estão sendo atualizados na table pelo workbench:

10.1.1 - Entre na conexão que você fez no workbench;
<br />
10.1.2 - Rode o comando "use crud;";
<br />
10.1.3 - Rode o comando "select from \* lanches;";

### 10.2 - Verificar se os dados estão sendo atualizados na table pela web:

10.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";

### 11 - Deletar dados da tabela:

11.1 - Entre na rota "http://localhost:8000/lanches/ver";
<br />
11.2 - Clique no botão Excluir;
<br />
11.3 - Se tudo tiver ocorrido com sucesso, vai aparecer a mensagem: "Lanche excluído com sucesso!";

### 12.1 - Verificar se os dados estão sendo deletados da tabela pelo workbench:

12.1.1 - Entre na conexão que você fez no workbench;
<br />
12.1.2 - Rode o comando "use crud;";
<br />
12.1.3 - Rode o comando "select from \* lanches;";

### 12.2 - Verificar se os dados estão sendo deletados na table pela web:

12.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";
