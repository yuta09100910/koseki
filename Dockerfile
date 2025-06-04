FROM php:8.2-apache

# 必要なPHP拡張をインストール
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    git \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Apache用の設定（Laravelはpublicをルートにする）
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Composer インストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravelプロジェクトをコピー
COPY . /var/www/html

# 作業ディレクトリを設定
WORKDIR /var/www/html

# Laravel関係の初期設定
RUN composer install --no-dev --optimize-autoloader && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 775 storage bootstrap/cache && \
    a2enmod rewrite