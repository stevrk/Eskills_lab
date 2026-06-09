#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Create storage directories
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache
mkdir -p database

# Create SQLite database
touch database/database.sqlite

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chmod -R 755 database
chmod 755 public/index.php

# Generate application key
php artisan key:generate --force

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed successfully!"