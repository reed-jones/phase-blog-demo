FROM php:7-fpm-alpine

# Good example of building specific node.js version...
# https://github.com/mhart/alpine-node/blob/master/build.dockerfile

# https://github.com/geshan/docker-php-composer-alpine/blob/master/Dockerfile

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
    && docker-php-ext-install pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del pcre-dev ${PHPIZE_DEPS}

# shared libraries for node (could be more specific)
COPY --from=node:alpine /usr/lib /usr/lib

# nodejs binary
COPY --from=node:alpine /usr/local/bin/node /usr/local/bin/

# npm
COPY --from=node:alpine /usr/local/lib/node_modules /usr/local/lib/node_modules
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

# yarn
COPY --from=node:alpine /opt/ /opt
RUN ln -s /opt/yarn-v1.22.4/bin/yarn /usr/local/bin/yarn

COPY --from=composer:latest /usr/bin/composer /usr/bin/

# set working dir
WORKDIR /var/www

# expose volume
VOLUME /var/www

# default cmd
CMD ["php-fpm"]

# ports
EXPOSE 8080
