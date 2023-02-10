## Sobre o Projeto

O projeto foi desenvolvido usando as seguintes tecnologias:

- [PHP (8.2.2)](https://www.php.net/downloads.php).
- [Composer (2.5.3)](https://getcomposer.org/).
- [Laravel (9.51.0)](https://laravel.com/).
- [Nodejs (18.14.0)](https://nodejs.org/en/).
- [SQLite](https://www.sqlite.org/index.html).
- [Jquery (3.6.3)](https://jquery.com/).
- [Bootstrap (5.3.0)](https://getbootstrap.com/).

## O Projeto

O projeto consiste em um sistema de cadastro de usuários e empresas.

Especificações:
- Tela de login;
- Tela de cadastro de usuário;
- Tela de edição de cadastro;
- Tela de cadastro de empresa;
- Tela de edição de empresa;
- Exlusão de cadastro de usuário;
- Exclusão de empresa;
- Consulta de empresas via API usando como chave seu ID.

Todos os modelos usam como ID UUID;

## Instalando o Projeto

Para instalar o projeto você deve seguir os passos abaixo.
As configurações do projeto já estão estabeleciadas no arquivo `.env.example`.

- Clonar este projeto em algum diretório de sua preferência, usando o `git clone`;
- Abrir um terminal do sistema operacional e navegar até a pasta do projeto;
- Executar o comando `composer install`, ele irá baixar e instalar todas as dependencias do projeto;
- Fazer uma cópia do arquivo `.env.example` no mesmo diretorio alterando o nome do arquivo para `.env`;
- Voltando ao terminal digite o comando `npm install` e precione ENTER, para instalar todas as dependencias de front-end;
- Digite o comando `npm run dev`, para compilar os arquivos necessários ao front-end;
- Digite o comando `php artisan key:generate`, para renovar as chaves do Laravel;
- Digite o comando `php artisan migrate`, para realizar as migrações e criar a base de dados, no momento da execução o terminal vai questinar se precisa ou não criar o banco de dados, digite `yes` para criar o banco de dados;
- Digite o comando `php artisan serve`, um servidor PHP será iniciado no caminho: 'http://localhost:8000', abrindo a página inicial do Projeto;

### Caminhos do projeto

A tela inicial do projeto é a tela de login e na parte superior esquerdo tem o link que direciona para o fomulário de cadastro de usuários.

Ao finalizar o cadastro do usuário, você será logado automaticamente no sistema.

Ao clicar no menu sanduishe, você vera todas as funcionalidades.

- Página inicial: Mais um link que direciona para a página inicial;
- Cadastro de empresa: Onde é informado os dados da empresa;
- Perfil de usuário: Onde pode fazer alteração dos dados do usuário;

### Pagina Inicial

A página inicial tem duas tabelas: uma de Empresas cadastradas e outra de usuários cadastrados.

Na tabela de empresas, tem uma coluna com as ações disponiveis, são elas:

- Editar uma empresa;
- Excluir uma empresa;

### Perfil
Na página do perfil, você pode alterar dados como nome, e e-mail, fazer a troca da senha do usuário e fazer a exclusão do perfil.
Na exclusão do perfil, junto ao usuário, todas as empresas que tenham esse usuário como dono serão excluidas da base.

### Consulta empresa API
Para realizar a consulta via API da empresa, o end-point para a consulta é a url base, geralmente `http://localhost:8000/`, concatenado com a rota `api/companies/{idEmpresa}`;

A resposta será um json com os dados da empresa, e do seu dono.

## Contato

Qualquer dúvida pode entrar em contato que todas as dúvidas serão sanadas
