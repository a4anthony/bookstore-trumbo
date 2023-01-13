# BookStore


## Setup

1. Install composer dependencies

    ```bash
    composer install
    ```
   
2. Copy .env.example to .env

    ```bash
    cp .env.example .env
    ```
   
3. Set database credentials in .env file

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=
    DB_PORT=
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    ```
   
4. Run migrations

    ```bash
    php artisan migrate
    ```
   
5. Run seeders

    ```bash
    php artisan db:seed
    ```
   
6. Install npm dependencies

    ```bash
    npm install
    ```
   
7. Build assets

    ```bash
    npm run dev
    ```
   
8. Run server

    ```bash
    php artisan serve
    ```
   
9. Open browser and go to http://localhost:8000

