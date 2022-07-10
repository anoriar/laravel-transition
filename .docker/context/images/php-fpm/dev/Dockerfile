FROM php:8.1.2-fpm

ARG USER_ID
ARG GROUP_ID

RUN apt-get update && apt-get install -y \
        git \
        curl \
        wget \
        libfreetype6-dev \
        libzip-dev \
        libpq-dev \
        libjpeg62-turbo-dev \
        libpng-dev zlib1g-dev libicu-dev g++ libmagickwand-dev --no-install-recommends libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip xml gd pdo pdo_pgsql bcmath\
    && pecl install imagick apcu \
    && docker-php-ext-enable imagick \
    && pecl install xdebug-3.1.3 \
    && docker-php-ext-enable xdebug

COPY ./conf/php-fpm/dev/php.ini /usr/local/etc/php/php.ini
COPY ./conf/php-fpm/dev/remote-xdebug.ini /usr/local/etc/php/conf.d/remote-xdebug.ini
COPY ./conf/php-fpm/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN wget https://getcomposer.org/installer -O - -q \
    | php -- --install-dir=/bin --filename=composer --quiet


RUN usermod -u ${USER_ID} www-data && groupmod -g ${GROUP_ID} www-data

WORKDIR /var/www

USER "${USER_ID}:${GROUP_ID}"

CMD ["php-fpm"]
