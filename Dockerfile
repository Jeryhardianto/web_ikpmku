FROM php:7.4-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev libjpeg-dev libfreetype6-dev libzip-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd mysqli zip

RUN echo 'session.save_path=/tmp' > /usr/local/etc/php/conf.d/zz-session.ini

COPY --chown=www-data:www-data . /var/www/html/
RUN chmod -R 777 /var/www/html/upload /var/www/html/application/cache /var/www/html/application/logs
