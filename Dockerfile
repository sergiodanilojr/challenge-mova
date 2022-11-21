FROM php:8.1.1-fpm

ENV user=mova
ENV UID=1000

RUN apt-get update && apt-get install -y \
    cron \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clean Cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run bash commands
RUN useradd -G www-data,root -u $UID -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

COPY ./php/php.ini /usr/local/etc/php/conf.d/custom-php.ini

WORKDIR /var/www

# Permissions to workdir
RUN chown -R $UID:$UID /var/www/

USER $user
