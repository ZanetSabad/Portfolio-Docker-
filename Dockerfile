FROM php:8.2-apache

RUN a2enmod rewrite

RUN sed -i '/<Directory \/var\/www\/html>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Soubory webu jsou přímo v image – při lokálním vývoji je přepíše volume z docker-compose.yml
COPY . /var/www/html/
