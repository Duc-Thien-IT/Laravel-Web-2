FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libsodium-dev \
    pkg-config \
    libcurl4-openssl-dev \
    libssl-dev \
    librdkafka-dev \
    zlib1g-dev \
    python3 \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install rdkafka extension
RUN pecl install rdkafka \
    && docker-php-ext-enable rdkafka

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    zip \
    sodium \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set new UID for user www-data
RUN usermod -u 1000 www-data

WORKDIR /var/www/
COPY . .
EXPOSE 9000
CMD ["php-fpm"]
