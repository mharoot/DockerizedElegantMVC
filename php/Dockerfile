# FROM php:7.2.0-fpm

# RUN pecl install redis-4.0.2 \
#     && docker-php-ext-enable redis \
#     && apt-get update \
#     && apt-get install -y git zlib1g-dev \
#     && docker-php-ext-install pdo pdo_mysql zip


# EXPOSE 80

FROM php:7.1.0-fpm

RUN pecl install redis-3.0.0 \
    && docker-php-ext-enable redis \
    && apt-get update && apt-get install -y \
        git \
        zlib1g-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql zip


EXPOSE 80