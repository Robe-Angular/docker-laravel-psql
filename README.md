# docker-laravel-psql
On APP with laravelRun
docker compose build
docker-compose build
if composer -version fails Run:

    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    apt-get install unzip
    composer create-project laravel/laravel appName
    chown -R www-data:www-data associates-departments-interprise

When the project is created
	apt-get update
	apt-get install -y libpq-dev
	docker-php-ext-install pdo_pgsql

Change DB_Port to 5432
connect to psqldb

	psql -U tutorial_user
	CREATE DATABASE tutorial_db
Now you can run
	php artisan migrate:install
To make models

	php artisan make:model ModelName -cfsr
	php artisan make:controller PhotoController --resource
Remember to put App\Http\Controllers\ControllerName on the routes file.

Error on cannot enter logs
	chown -R www-data:www-data storage
Check .env configuration
DB_CONNECTION=pgsql
DB_HOST=psql
DB_PORT=5432
DB_DATABASE=tutorial_db
DB_USERNAME=tutorial_user
DB_PASSWORD=secret_tutorial