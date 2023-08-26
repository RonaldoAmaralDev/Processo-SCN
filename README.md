<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Especificações:


* Banco de dados é criado via migration 
* Dados dos clientes e produtos são cadastrados automáticamente ao rodar o projeto pela 1 vez
* Validação de CPF/CNPJ
* Código Único do produto
* Se deletar o cliente, deleta os preço [onDelete ForeignKey]
* Se deletar os produtos, remove o preços dele [onDelete ForeignKey]
* Tabela de LOG para cada ação do usuário
* Mascáras de valor, CEP e CPF/CNPJ


## Comandos:

git clone https://github.com/RonaldoAmaralDev/Processo-SCN.git
composer install # or composer update
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve

## Autenticação/Login:

teste@teste.com.br	
123456