# design-pattern

# Give correct ownership to Laravel writable folders
chown -R www-data:www-data storage bootstrap/cache
php artisan key:generate
php artisan migrate

