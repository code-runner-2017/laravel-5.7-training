# Introduction

This is a tutorial for Laravel 5.7 on Windows.
This is *not* a beginners tutorial going step by step: the assumption is that you already know
PHP and how to configure it on Windows.

This project contains multiple tags corresponding to the training steps.

# Requirements

- composer (http://getcomposer.org)
- XAMPP https://sourceforge.net/projects/xampp/
  or any other environment that comes with php >= 7.1.3
- (optional) git bash (https://gitforwindows.org/)

# Setup

- from xampp control panel, open a shell

- check that you are using at least php 7.1.3:
```    
    php -v
```
- install laravel (first time only):    
    composer global require laravel/installer

- create a new project
```
    laravel new laravel-5.7-training
    cd laravel-5.7-training
    composer install
    composer update
    cp .env.example .env
    php artisan key:generate
```

- edit apache's `httpd-vhosts.conf` (C:\xampp\apache\conf\extra)    
```
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
```    
- add the following line to `C:\Windows\System32\drivers\etc\hosts`:
```
    127.0.0.1 laravel-5.7-training.test
``` 
- start apache

- open this in your web browser: http://laravel-5.7-training.test/

- you should see the welcome page

- for xdebug setup (optional, but recommended) download `PHP 7.2 VC15 TS (32 bit)` from 
    `https://xdebug.org/download.php` and add the following section to the end of the php.ini file:
```
    [xdebug]
    zend_extension=php_xdebug-2.7.0beta1-7.2-vc15.dll
    xdebug.remote_autostart=on
    xdebug.remote_enable=on
    xdebug.remote_host=127.0.0.1
    xdebug.remote_port=9000
    xdebug.remote_handler=dbgp
    xdebug.remote_mode=req
    xdebug.idekey=default
```

For the rest of this tutorial check out the files in the `resources/doc` directory.

