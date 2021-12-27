FROM php:7.4-apache


RUN apt-get update \
    && apt-get install -y net-tools
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip


RUN apt-get install libldap2-dev -y && \
    docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && \
    docker-php-ext-install ldap

RUN a2enmod rewrite

EXPOSE 80