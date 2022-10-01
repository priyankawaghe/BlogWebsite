# BlogWebsite
A simple blog website for post articles purpose. Based on Laravel 8.

# Requirements
1. xampp server
2. PHP ^7.3|^8.0
3. Laravel 8

# Installation

git clone  https://github.com/priyankawaghe/BlogWebsite.git 
cd BlogWebsite
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed

# Run server
Run server using this command-
php artisan serve

Then go to http://127.0.0.1:8000/admin/login from your browser and see the admin. (Username: admin, Password: 123456)

Then go to http://127.0.0.1:8000 from your browser and see the website.

Then go to http://127.0.0.1:8000/login from your browser and see the user login.(Username:****,Password:123456)



