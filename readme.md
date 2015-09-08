# Desenvolvendo com Laravel - Softerize Magazine

Este repositório é utilizando para atualizar o código referente ao tutorial [Desenvolvendo com Laravel da Softerize Magazine](http://magazine.softerize.com.br/series/desenvolvendo-com-laravel) a partir da versão 5.0 do Laravel.
O repositório anterior, referente a versão 4.2, pode ser encontrado em [oscardias/desenvolvendo_com_laravel](https://github.com/oscardias/desenvolvendo_com_laravel).
Você pode encontrar a tag referente a cada artigo nos releases.

## Artigos

Lista de artigos da série de tutoriais:

- [Introdução ao Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/introducao-ao-laravel)
- [Iniciando um Novo Projeto no Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/iniciando-um-novo-projeto-laravel)
- [Banco de Dados no Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/banco-de-dados-laravel)
- [Laravel: Rotas e Controllers](http://magazine.softerize.com.br/tutoriais/php/laravel/laravel-rotas-e-controllers)
- [Templates com Blade e Bootstrap no Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/templates-com-blade-e-bootstrap-laravel)
- [Usuários e Controle de Acesso no Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/usuarios-e-controle-de-acesso-laravel)
- [Relacionamento entre Tabelas no Laravel](http://magazine.softerize.com.br/tutoriais/php/laravel/relacionamento-entre-tabelas-laravel)

Outros artigos sobre o Laravel:

- [Migrando o Laravel de 4.2 para 5.1](http://magazine.softerize.com.br/dicas/php-dicas/laravel-php-dicas/migrando-o-laravel-de-4-2-para-5-1)
- [Atualizando o Laravel de 4.1 para 4.2](http://magazine.softerize.com.br/dicas/php-dicas/laravel-php-dicas/atualizando-o-laravel-de-4-1-para-4-2)

Artigos sobre PHP (que referenciam este projeto):

- [Namespaces no PHP](http://magazine.softerize.com.br/tutoriais/php/namespaces-no-php)

## Instalação

Para instalar a aplicação baixe a versão desejada nos releases ou clone o repositório.

    git clone git@github.com:oscardias/dev-laravel-5.git

Execute o **composer install** (caso não tenha o Composer, visite [Composer](https://getcomposer.org/)).
Crie um banco de dados no MySQL, copie o *.env.example* para *.env* e atualize as informações necessárias.
Execute **php artisan migrate** para criar as tabelas.
E, finalmente, execute o comando **php artisan db:seed** para criar o usuário padrão.