FROM php:7-fpm-alpine

# Good example of building specific node.js version...
# https://github.com/mhart/alpine-node/blob/master/build.dockerfile

# https://github.com/geshan/docker-php-composer-alpine/blob/master/Dockerfile

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
    && docker-php-ext-install pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del pcre-dev ${PHPIZE_DEPS} \
    && apk --update add nodejs npm \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
    && mkdir -p /var/www

# set working dir
WORKDIR /var/www

# expose volume
VOLUME /var/www

# default cmd
CMD ["php-fpm"]

# ports
EXPOSE 8080
