FROM php:8.2-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
    npm \
    composer

COPY . .

RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]