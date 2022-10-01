# BlogWebsite
A simple blog website for post articles purpose. Based on Laravel 8.

# Requirements
1. xampp server
2. PHP ^7.3|^8.0
3. Laravel 8

# Installation

Clone the repository-
1.  git clone  https://github.com/priyankawaghe/BlogWebsite.git 
  
Then cd into the folder with this command-
2. cd BlogWebsite

Then do a composer install
3. composer install
4. 
Then edit .env file with appropriate credential for your database server. Just edit these  parameter(DB_DATABASE,
DB_USERNAME)
 4.env file name = env.example .env
 
5.php artisan key:generate
.
Then create a database named blog and then do a database migration using this command-
6. php artisan migrate
7. php artisan db:seed

# Run server
Run server using this command-
php artisan serve

Then go to http://127.0.0.1:8000/admin/login from your browser and see the admin. (Username: admin, Password: 123456)

Then go to http://127.0.0.1:8000 from your browser and see the website.

Then go to http://127.0.0.1:8000/login from your browser and see the user login.(Username:****,Password:123456)



