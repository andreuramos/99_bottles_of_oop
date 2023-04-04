FROM php:8.1-cli

RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        && docker-php-ext-install zip \
        && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY . /code

WORKDIR /code


