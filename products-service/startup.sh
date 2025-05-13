#!/bin/bash
# Corrige permissões
chown -R www-data:www-data /var/www/storage
chmod -R 775 /var/www/storage

# Inicia o PHP-FPM
exec php-fpm