# create .env and create database then run the following commands
composer install <br>
php artisan config:cache<br>
php artisan storage:link<br>
php artisan migrate —seed
