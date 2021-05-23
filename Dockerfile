FROM php:7.3.2-apache-stretch

LABEL maintainer="The Hansen Group. <kyle@thehansengroup.co.za>" \
      version="0.01"

COPY --chown=www-data:www-data . /srv/couplestree

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf 

WORKDIR /srv/couplestree

RUN apt-get update && apt install -y python3-gdal && apt-get install -y montage && apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*

RUN printf "\n" | pecl install imagick

RUN docker-php-ext-install mbstring pdo pdo_mysql \ 
    && a2enmod rewrite negotiation \
    && docker-php-ext-install opcache

RUN docker-php-ext-enable imagick
