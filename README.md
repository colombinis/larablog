# larablog
Quick notes to work with laravel

* 1) crea modelo y automaticamente migration y factory
php artisan  make:model Post -a

* 2) creo las rutas estandares en web.php
Route::resource('post','PostController');

* 3) configuro .env de la BD y preparo login/register
php artisan make:auth

* 4) creo la tabla para manejar migraciones
php artisan migrate:install

* 5) ejecuto las migraciones
php artisan migrate

* 6) insertamos datos en las tablas (creando y registrando los seed previamente)
ej: creo un seed para posts
     php artisan make:seeder PostSeeder
ejecuto: 
     php artisan db:seed
