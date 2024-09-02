# Use a imagem PHP 8.2 FPM
FROM php:8.2-fpm

# Instale a extensão GD
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli

# Copie o código da aplicação para o contêiner
COPY . /app

# Defina o diretório de trabalho
WORKDIR /app

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
