#!/bin/bash

# Start PHP-FPM in background
php-fpm -D

# Run migrations
php artisan migrate --force

# Start Nginx in foreground
nginx -g 'daemon off;'