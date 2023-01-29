FROM php:8.1-apache

# install package
RUN apt-get update \
  && apt-get install -y zlib1g-dev libpq-dev git zip unzip \
  && docker-php-ext-install pdo_mysql mysqli

# install composer
RUN curl -s http://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

COPY 000-default.conf /etc/apache2/sites-enabled/