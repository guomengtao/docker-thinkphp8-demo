FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    git \
    nginx \
    && docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
RUN composer create-project topthink/think tp8
