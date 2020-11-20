This project is developed with Laravel for the backend. 

For it to work localy, you will need to do the following:


<h3>Installation</h3>

<h3>Server Requirements</h3>
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

PHP >= 7.3
BCMath PHP Extension
Ctype PHP Extension
Fileinfo PHP Extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Installing Laravel

<h4>Important!</h4>
Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

if you do not have composer: please visit https://getcomposer.org/ and follow the instructions to install it. 

<h3>Via Laravel Installer</h3>
First, download the Laravel installer using Composer:

<span>composer global require laravel/installer</span>


<h3>Local Development Server</h3>
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

php artisan serve


Enjoy! 
