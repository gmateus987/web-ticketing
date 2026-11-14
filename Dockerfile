FROM php:8.4.27-fpm

ARG APP_VERSION=1.0
ARG APP_DIR=/var/www/html

RUN apt-get update
RUN apt-get install -y --no-install-recommends \
    apt-utils

RUN apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    libpng-dev \
    libpq-dev \
    libxml2-dev

RUN docker-php-ext-install pdo pdo_pgsql pgsql gd intl zip opcache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

WORKDIR $APP_DIR
RUN cd $APP_DIR
RUN chmod 755 -R *
RUN chown -R www-data: *

RUN apt-get clean && rm -rf /var/lib/apt/lists/*