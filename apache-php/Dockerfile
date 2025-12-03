# Archivo: apache-php/Dockerfile

FROM php:8.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar módulos
RUN a2enmod rewrite
RUN a2enmod negotiation

# 1. Copia y REEMPLAZA el archivo de configuración con la versión corregida
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# 2. Copia el código fuente
COPY src /var/www/html
