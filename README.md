# Requirements

-   [PHP 8.1+](https://www.php.net/downloads.php)
-   [MariaDB 11.3.2](https://mariadb.org/download/?t=mariadb&p=mariadb&r=11.3.2&os=windows&cpu=x86_64&pkg=msi&mirror=nus)
-   [NodeJS 18+](https://nodejs.org/en/download)
-   [Docker (for production)](https://docs.docker.com/get-docker/)

# Installation

1. Install dependencies

```
composer install
npm install
```

2. Copy `.env.example` to `.env` & setup the environment
3. Generate Key

```
php artisan key:generate
```

4. Run migrations

```
php artisan migrate:fresh --seed
```

5. Run storage link

```
php artisan storage:link
```

# Local Development

1. Run the project

```
php artisan serve
```

2. Run laravel vite

```
npm run dev
```