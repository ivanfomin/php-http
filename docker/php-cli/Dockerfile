FROM php:8.1-cli-alpine

RUN apk update && apk add autoconf g++ make \
    && pecl install xdebug \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini


#  RUN docker-php-ext-install intl

RUN addgroup -g 1000 app && adduser -u 1000 -G app -s /bin/sh -D app

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /app

USER app


