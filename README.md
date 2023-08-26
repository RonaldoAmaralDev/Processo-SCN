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
* Todas alterações e melhorias feitas por commits separados

## Comandos:

<p>
git clone https://github.com/RonaldoAmaralDev/Processo-SCN.git
</p>
<p>
composer install # or composer update
</p>
<p>
cp .env.example .env
</p>
<p>
php artisan key:generate
</p>
<p>
php artisan migrate
</p>
<p>
php artisan db:seed
</p>
<p>
php artisan serve
</p>

## Autenticação/Login:

teste@teste.com.br	
123456


![image](https://github.com/RonaldoAmaralDev/Processo-SCN/assets/34324890/ec02b014-0e08-43bd-848b-9f461c2c8397)
![image](https://github.com/RonaldoAmaralDev/Processo-SCN/assets/34324890/e95aa23c-2611-4e67-b59a-693b05a9b7a3)
![image](https://github.com/RonaldoAmaralDev/Processo-SCN/assets/34324890/bb4cbe1c-7a55-482c-88c9-f4deefae0b7f)
![image](https://github.com/RonaldoAmaralDev/Processo-SCN/assets/34324890/e6fb0a8e-da5b-4e68-a3a3-af29b2cd4d44)
![image](https://github.com/RonaldoAmaralDev/Processo-SCN/assets/34324890/a28e3801-c1d7-4962-b0de-0299ef4cbb49)




