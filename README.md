# create .env and create database then run the following commands
composer install <br>
php artisan config:cache<br>
php artisan storage:link<br>
php artisan migrate —seed
<br>
<br>
<p>
after migrating and seeding the database you will have an editor account with the following credentials: <br>
login: admin@admin.com<br>
password: admin
</p>
