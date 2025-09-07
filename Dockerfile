# Imagen de PHP
FROM php:8.2-apache
# Extensiones comunes para PHP + MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql
# (opcional) URL rewriting
RUN a2enmod rewrite