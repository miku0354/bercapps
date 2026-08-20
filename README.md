# Berca Web App

Tutorial for deployment

## Prerequisites

- Ubuntu server (20.04 or 22.04 LTS recommended)
- PHP 8.2^
- Composer
- PostgreSQL
- MySQL
- Docker
- Git/GitLab

## Directory Setup

#### Clone repository to your server directory

```bash
cd /var/www/
git clone http://10.40.40.26/it/dev/bercapps.git
```

#### Set proper permissions

```bash
sudo chown -R www-data:www-data /var/www/bercapps
sudo chmod -R 775 /var/www/bercapps/storage
sudo chmod -R 775 /var/www/bercapps/bootstrap/cache
```

## Configure Laravel

#### Copy .env

```bash
cd /var/www/bercapps
cp .env.example .env
```

#### Set .env values (DB, APP_URL, etc.):

```ini
APP_NAME="Berca Web App"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=your_domain_url

DEBUGBAR_ENABLED=true

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

DB_HOST_PAMERAN=127.0.0.1
DB_PORT_PAMERAN=5432
DB_DATABASE_PAMERAN=
DB_USERNAME_PAMERAN=
DB_PASSWORD_PAMERAN=

DB_CONNECTION_BMP_EXCO=mysql
DB_HOST_BMP_EXCO=
DB_PORT_BMP_EXCO=
DB_DATABASE_BMP_EXCO=
DB_USERNAME_BMP_EXCO=
DB_PASSWORD_BMP_EXCO=

DB_CONNECTION_BMP_LOGIN=mysql
DB_HOST_BMP_LOGIN=
DB_PORT_BMP_LOGIN=
DB_DATABASE_BMP_LOGIN=
DB_USERNAME_BMP_LOGIN=
DB_PASSWORD_BMP_LOGIN=

DB_CONNECTION_AIS=mysql
DB_HOST_AIS=
DB_PORT_AIS=
DB_DATABASE_AIS=
DB_USERNAME_AIS=
DB_PASSWORD_AIS=

ODBC_DSN=
ODBC_USERNAME=
ODBC_PASSWORD=

PROGRESS_DSN=
PROGRESS_DB_USERNAME=
PROGRESS_DB_PASSWORD=

DATATABLES_ERROR=throw

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=public

QUEUE_CONNECTION=database
QUEUE_DATABASE=

SESSION_DOMAIN=
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME="Berca Web App"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

APP_TIMEZONE=Asia/Jakarta
APP_LOCALE=id
FAKER_LOCALE=id_ID

SHARED_SECRET_KEY=
CROSS_APP_KEY=
API_KEY=
```

#### Generate app key:

```bash
php artisan key:generate
```

#### Install dependencies:

```bash
composer install --optimize-autoloader --no-dev
composer dump-autoload
```

#### Run migrations (if any):

```bash
php artisan migrate --force
```

#### or safely run this command:

```bash
php artisan db:refresh --database=all
```

#### Publish laravel vendor:

```bash
php artisan vendor:publish
```

#### Generate Symlink for storage

```bash
php artisan storage:link
```

#### Clear all cache

```bash
php artisan optimize:clear
```

### Additional commands:

#### Auto email notification & approval (Cronjob):

```bash
php artisan queue:work database
```

#### Auto update with task scheduler (Cronjob):

```bash
php artisan schedule:work
```

### Authors

- [Edward Evbert](mailto:edward.evbert@berca-mp.co.id)

### Used By

This project is used by the following companies:

- PT BERCA MANDIRI PERKASA
