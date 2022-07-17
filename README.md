<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre o Projeto

O projeto consiste em fazer um CRUD utilizando Laravel, e tem como foco a aprendizagem dessa tecnologia em geral.

## Startando Projeto

### 1 - Clonar o projeto;

Utilize o comando Git Clone dentro da pasta onde você quer clonar o repositório;

### 2 - No meu caso, utilizei o XAMPP para subir o serviço MySql:

2.1 - Vá no site "https://www.apachefriends.org/pt_br/index.html";
<br />
2.2 - Escolha o sistema operacional que você usa;
<br />
2.3 - Instale o XAMPP;
<br />
2.4 - Suba o serviço MySQL;

### 3 - Criar um banco de dados(Eu usei mysql):

3.1 - No meu caso usei o Workbench para criar;
<br />
3.2 - Abra o Workbench e vá em MySQL Connections e clique no ícone "+";
<br />
3.3 - Digite "crud" no campo Connection Name;
<br />
3.4 - Deixe por padrão o campo Username como root;
<br />
3.5 - Entre na conexão;
<br />
3.6 - Rode o comando "create database crud";

### 4 - Rodar o Artisan Serve:

4.1 - Abra o terminal dentro da pasta do projeto;
<br />
4.2 - Rode o comando php artisan serve;

## Usar o crud

### 5 - Inserir dados na tabela:

5.1 - Digitar o seguinte link no seu navegador "http://localhost:8000/lanches/novo";
<br />
5.2 - Insira os dados;
<br />
5.3 - Se tudo estiver correto irá aparecer a mensagem: "Lanche criado com sucesso!";

### 6.1 - Verificar se os dados estão sendo inseridos na table pelo workbench:

6.1.1 - Entre na conexão que você fez no workbench;
<br />
6.1.2 - Rode o comando "use crud";
<br />
6.1.3 - Rode o comando "select from \* lanches";

### 6.2 - Verificar se os dados estão sendo inseridos na table pela web:

6.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";

### 7.1 - Verificar tabela com dados no workbench:

7.1.1 - Entre na conexão que você fez no workbench;
<br />
7.1.2 - Rode o comando "use crud";
<br />
7.1.3 - Rode o comando "select from \* lanches";

### 7.2 - Verificar tabela com dados na web:

7.1.1- Entrar na rota "http://localhost:8000/lanches/ver";

### 8 - Editar dados da tabela:

8.1 - Entrar na rota "http://localhost:8000/lanches/ver";
<br />
8.2 - Escolher o item que você quer editar;
<br />
8.3 - Clicar no botão Editar, você redirecionado para página de edição;
<br />
8.4 - Escolha o campo que você deseja alterar;
<br />
8.5 - Clique em salvar, se tudo estiver certo vai aparecer a mensagem: "Lanche atualizado com sucesso!";

### 9.1 - Verificar se os dados estão sendo atualizados na table pelo workbench:

9.1.1 - Entre na conexão que você fez no workbench;
<br />
9.1.2 - Rode o comando "use crud";
<br />
9.1.3 - Rode o comando "select from \* lanches";

### 9.2 - Verificar se os dados estão sendo atualizados na table pela web:

9.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";

### 10 - Deletar dados da tabela:

10.1 - Entre na rota "http://localhost:8000/lanches/ver";
<br />
10.2 - Clique no botão Excluir;
<br />
10.3 - Se tudo tiver ocorrido com sucesso, vai aparecer a mensagem: "Lanche excluído com sucesso!";

### 11.1 - Verificar se os dados estão sendo deletados da tabela pelo workbench:

11.1.1 - Entre na conexão que você fez no workbench;
<br />
11.1.2 - Rode o comando "use crud";
<br />
11.1.3 - Rode o comando "select from \* lanches";

### 11.2 - Verificar se os dados estão sendo deletados na table pela web:

11.2.1 - Entrar na rota "http://localhost:8000/lanches/ver";
