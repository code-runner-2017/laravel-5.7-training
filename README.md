# Requirements

- git bash (https://gitforwindows.org/)
- XAMPP https://sourceforge.net/projects/xampp/
  or any other environment that comes with php >= 7.1.3

# Setup

- check that you are using at least php 7.1.3

- open bash and run:

    laravel new laravel-5.7-training
    cd laravel-5.7-training
    composer install
    composer update
    cp .env.example .env
    php artisan key:generate

- edit apache's `httpd-vhosts.conf` (C:\xampp\apache\conf\extra)    
    
    <VirtualHost *:80>
     ServerAdmin webmaster@laravelcom
     DocumentRoot D:/Projects/WEBAPPS/laravel-5.7-training/public
     ServerName laravel-5.7-training.test
     ErrorLog logs/laravel-5.7-training-error.log
     CustomLog logs/laravel-5.7-training-access.log common
     <Directory "/">
       Options Indexes Includes 
       AllowOverride All   
       Require all granted 
     </Directory> 
    </VirtualHost> 
    
- add the following line to `C:\Windows\System32\drivers\etc\hosts`:

    127.0.0.1 laravel-5.7-training.test
    
- start apache

- open this in your web browser: http://laravel-5.7-training.test/

- you should see the welcome page
