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

# Production

1. To enable `HTTPS` set `APP_ENV` to `production` and change `APP_URL` using `https://` in `.env` file

```
APP_ENV=production
APP_URL=https://YOUR_DOMAIN_NAME
```

2. Setup nginx / apache server to `docker port`, here is the example nginx file.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fill `YOUR_SERVER_IP_ADDRESS`, `DOCKER_PORT` & `YOUR_DOMAIN_NAME` with your server property

```
upstream oic {
    server YOUR_SERVER_IP_ADDRESS:DOCKER_PORT;
}

server {
    server_tokens off;
    server_name YOUR_DOMAIN_NAME;

    location / {
        try_files $uri @oic;
    }

    location @oic {
        proxy_pass https://oic;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header Host $host;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        # Following is necessary for Websocket support
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection "upgrade";
    }
}
```

4. Create docker compose file from example and configure it (Default open port is 9000)

```
cp docker-compose.yml.example docker-compose.yml
```

5. Run the docker compose

```
# for root user
docker compose up -d

# for non-root user (must be in sudoer group)
sudo docker compose up -d
```
