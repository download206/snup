FROM php:8.2-apache

WORKDIR /var/www/html

# Instala dependências essenciais
RUN apt-get update && \
    apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
        npm \
        sqlite3 \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia os arquivos do projeto
COPY . .

# Instala dependências
RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build \
    && touch database/database.sqlite \
    && chmod 755 database/database.sqlite

# Configura Apache
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]