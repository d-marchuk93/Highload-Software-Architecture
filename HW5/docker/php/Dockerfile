FROM php:7.4.3-fpm-alpine3.11

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
RUN docker-php-ext-install mysqli

# Copy the application code
COPY . /app

VOLUME ["/app"]