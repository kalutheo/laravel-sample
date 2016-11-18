FROM php:7.1-apache

# Install PDO MySQL driver
RUN docker-php-ext-install \
    mbstring \
    pdo \
    pdo_mysql \
    mysqli

RUN a2enmod rewrite
COPY 010-default.conf /etc/apache2/sites-available
WORKDIR /var/www

RUN apt-get update -y && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer self-update && \
    a2dissite 000-default && \
    a2ensite 010-default && \
    apt-get remove --purge curl -y && \
    apt-get clean

RUN apt-get update && apt-get install -y \
  git


RUN usermod -u 1000 www-data



RUN chown -R www-data:www-data /var/www/html
ONBUILD RUN composer self-update \
        && cd /var/www/html \
        && composer update \
        --no-ansi \
        --no-dev \
        --no-interaction \
        --no-progress \
        --prefer-dist

ONBUILD RUN composer install
ONBUILD RUN php artisan key:generate


WORKDIR /var/www/html

ONBUILD RUN chmod 777 -R /var/www/html/storage
