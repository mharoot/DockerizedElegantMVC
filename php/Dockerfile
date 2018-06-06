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
    && apt-get update \
    && apt-get install -y git zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql zip


EXPOSE 80