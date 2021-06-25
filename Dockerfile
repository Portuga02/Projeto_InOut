FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/projeto_inout
EXPOSE 80