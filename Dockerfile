FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-install \
        pdo_mysql \
        zip

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

COPY ./src /var/www/html/project
WORKDIR /var/www/html/project/
RUN composer install
RUN php vendor/bin/phpunit ChallengeTest.php

EXPOSE 80
