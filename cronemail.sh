#!/bin/sh
cd /var/www/repository/mrkt-pricelist
php artisan queue:work database
php artisan schedule:run
