FROM php:7.1.0-fpm

RUN pecl install redis-3.0.0 \
    && docker-php-ext-enable redis \
    && apt-get update \
    && apt-get install -y git zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# VOLUME code already have it in the docker compose testing now.

EXPOSE 80