FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Allow .htaccess to work
RUN sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Install common PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html