#vamos a usar una imagen base de php
FROM php:8.1-apache

#instalar las dependencias necesarias para trabjar con postgresql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

#ahora copiamos el contenido de mi app al contenedor
COPY . /var/www/html/

#Exponiendo el puerto 80
EXPOSE 80
