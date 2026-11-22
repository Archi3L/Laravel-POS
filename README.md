# Laravel POS TFA6

This project displays customer and user records using Laravel migrations, Eloquent models, a seeder, and Blade views.

## Requirements

- PHP 8.2 or later
- Composer
- SQLite

## Setup on Windows

Clone the TFA6 branch and install its dependencies:

```powershell
git clone --branch tfa6 https://github.com/Archi3L/Laravel-POS.git
cd Laravel-POS
composer install
Copy-Item .env.example .env
php artisan key:generate