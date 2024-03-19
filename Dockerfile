FROM php:8.2-apache

# PHP
RUN apt-get update && apt-get upgrade
RUN apt-get install -y zlib1g-dev libwebp-dev libpng-dev && docker-php-ext-install gd
RUN apt-get install libzip-dev -y && docker-php-ext-install zip


# PHP Extensions
RUN docker-php-ext-install mysqli && docker-php-ext-install pdo_mysql
COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini

#dossier src 
COPY src/index.php /var/www/html/index.php
COPY src/css /var/www/html/css
COPY src/db /var/www/html/db
COPY src/fonts /var/www/html/fonts
COPY src/include /var/www/html/include
COPY src/personne /var/www/html/personne
COPY src/pix /var/www/html/pix
COPY src/session /var/www/html/session
COPY src/templates /var/www/html/templates


# Apache
RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 80