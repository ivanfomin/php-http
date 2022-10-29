FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libpq-dev iputils-ping iproute2
RUN docker-php-ext-install -j$(nproc) pdo pdo_pgsql
RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini


COPY entrypoint.sh /usr/local/bin/docker-php-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-php-entrypoint.sh
ENTRYPOINT ["/usr/local/bin/docker-php-entrypoint.sh"]





WORKDIR /app

