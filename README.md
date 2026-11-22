# Tasks for Today Management System

A Laravel task management application built with Eloquent, database migrations, and a seeder.

## Features

- `/` — displays tasks scheduled for today
- `/tasks` — displays all tasks ordered by date
- `/profile` — displays the seeded user
- `/about` — identifies the developer

## Database

The project includes migrations for the `tasks` and `users` tables. The `TaskSeeder` adds eight sample tasks across three dates, including today, and one user.

## Run locally (Windows PowerShell)

```powershell
git clone -b tsa3 https://github.com/Archi3L/Laravel-POS.git
cd Laravel-POS
composer install
Copy-Item .env.example .env
if (-not (Test-Path .\database\database.sqlite)) {
    New-Item -Path .\database\database.sqlite -ItemType File
}
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Hosted Application

Add the TSA3 website link here after it has been deployed.