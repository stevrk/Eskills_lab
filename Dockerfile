FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    zip \
    unzip \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create required directories
RUN mkdir -p /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/bootstrap/cache \
    /var/www/html/database

# Create SQLite database file
RUN touch /var/www/html/database/database.sqlite

# Create .env file properly (with quotes around values with spaces)
RUN echo "APP_NAME=\"SJOGU E-Skills Lab\"" > /var/www/html/.env && \
    echo "APP_ENV=production" >> /var/www/html/.env && \
    echo "APP_DEBUG=false" >> /var/www/html/.env && \
    echo "APP_KEY=base64:4fJX3qY8rK9mV2nP7sB5dH1wL6cR8tX0zM4aB9cD2eF3=" >> /var/www/html/.env && \
    echo "APP_URL=https://eskills-lab.onrender.com" >> /var/www/html/.env && \
    echo "LOG_CHANNEL=stack" >> /var/www/html/.env && \
    echo "DB_CONNECTION=sqlite" >> /var/www/html/.env && \
    echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> /var/www/html/.env && \
    echo "SESSION_DRIVER=file" >> /var/www/html/.env

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www/html/storage
RUN chmod -R 777 /var/www/html/bootstrap/cache
RUN chmod -R 777 /var/www/html/database
RUN chmod -R 755 /var/www/html/public
RUN chmod 755 /var/www/html/public/index.php

# Configure Apache to listen on port 10000
RUN sed -i 's/Listen 80/Listen 10000/g' /etc/apache2/ports.conf
RUN sed -i 's/:80/:10000/g' /etc/apache2/sites-available/000-default.conf || true

# Create Laravel virtual host configuration
RUN cat > /etc/apache2/sites-available/laravel.conf <<EOF
<VirtualHost *:10000>
    ServerName localhost
    DocumentRoot /var/www/html/public
    
    <Directory /var/www/html/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

# Enable the site
RUN a2dissite 000-default.conf 2>/dev/null || true
RUN a2ensite laravel.conf

EXPOSE 10000

CMD ["apache2-foreground"]