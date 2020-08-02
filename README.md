## Requirements

- PHP >= 7.2.5

## Install

- git clone https://github.com/Sergii81/binar.git
- composer install
- cp .env.example .env (+update config variables - DB_DATABASE, DB_USERNAME, DB_PASSWORD)  
- php artisan key:generate  
- chmod -R 777 storage
- php artisan migrate
- php artisan db:seed
