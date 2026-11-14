FROM php:8.4.27-fpm

ARG APP_VERSION=1.0
WORKDIR /var/www/html

RUN apt-get update
RUN apt-get install -y --no-install-recommends \
    apt-utils

RUN apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    libpng-dev \
    libpq-dev \
    libxml2-dev \
    libicu-dev

RUN docker-php-ext-install pdo pdo_pgsql pgsql gd intl zip opcache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get clean && rm -rf /var/lib/apt/lists/*