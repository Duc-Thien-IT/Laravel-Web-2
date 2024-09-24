FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    librdkafka-dev \
    git \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql
RUN pecl install rdkafka && docker-php-ext-enable rdkafka

# Install Composer
COPY --from=composer:2.7.9 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents
COPY . .

# Install application dependencies
RUN composer install

# Copy existing application directory permissions
COPY --chown=www-data:www-data . .

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
