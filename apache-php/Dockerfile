FROM php:8.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Habilitar mod_rewrite si lo necesitas
RUN a2enmod rewrite
RUN a2enmod negotiation
# Configuración opcional de Apache
COPY . /var/www/html
