#INSTALLATION

## Requirements

- DB: MySQL 5.7 and above
- PHP: 7.2 and above

## Installation

- composer install
- php artisan migrate
- php artisan db:seed
- php artisan key:generate
- php artisan passport:install
- php artisan storage:link

## Permissions

- chmod -R 777 storage

## TESTS

vendor\bin\phpunit