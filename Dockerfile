FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev libjpeg-dev libfreetype6-dev libzip-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd mysqli zip \
    && a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 8M: controller membatasi upload di 2048 KB, PHP default post_max_size 8M sudah cukup
# tapi upload_max_filesize default 2M memotong tepat di batas itu.
RUN printf 'session.save_path=/tmp\nupload_max_filesize=8M\npost_max_size=8M\n' \
        > /usr/local/etc/php/conf.d/zz-app.ini

COPY --chown=www-data:www-data . /var/www/html/
RUN chmod -R 777 /var/www/html/upload /var/www/html/application/cache /var/www/html/application/logs
