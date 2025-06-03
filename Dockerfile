# Dockerfile（Laravel用）
FROM php:8.2-apache

# システムとPHPの必要パッケージをインストール
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Composerをインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# プロジェクトファイルをコピー
COPY . /var/www/html

# 作業ディレクトリの設定
WORKDIR /var/www/html

# Laravelの依存関係をインストール（重要！）
RUN composer install --no-dev --optimize-autoloader

# ApacheのDocumentRootをLaravelのpublicに変更
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# .htaccessを有効にする
RUN a2enmod rewrite

# ポート設定
EXPOSE 80