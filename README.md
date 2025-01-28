# create .env and create database then run the following commands
composer install
php artisan config:cache
php artisan storage:link
php artisan migrate —seed
