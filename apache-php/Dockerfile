# Archivo: apache-php/Dockerfile (SOLUCIÓN DEFINITIVA)

FROM php:8.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar módulos
RUN a2enmod rewrite
RUN a2enmod negotiation

# INYECCIÓN GARANTIZADA DE AllowOverride All
# Esto añade un bloque de configuración al final del 000-default.conf
RUN echo '<Directory /var/www/html>' >> /etc/apache2/sites-available/000-default.conf \
    && echo '    AllowOverride All' >> /etc/apache2/sites-available/000-default.conf \
    && echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf

# Copiamos el código fuente (asegúrate de que el .htaccess esté en src/)
COPY src /var/www/html
