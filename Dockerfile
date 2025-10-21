# Imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Copiar todo el contenido del proyecto al contenedor
COPY . /var/www/html/

# Establecer permisos correctos para Apache
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto HTTP
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
