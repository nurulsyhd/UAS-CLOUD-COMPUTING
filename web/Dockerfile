FROM php:8.0-apache

# Install ekstensi mysqli
RUN docker-php-ext-install mysqli

# Copy file PHP ke dalam container
COPY . /var/www/html/
