# Backend API Client

This repo contains the backend logic for camp-scheduler and is built on the [Laravel Framework](laravel.com).

## Installation

Download [docker](https://www.docker.com/) if not already installed.


### Starting the services

```bash
cp .env.example .env
APP_PORT=9001 ./vendor/bin/sail up
```

Go to [localhost](http://localhost:9001) to confirm you see the Laravel home screen.

```bash
sail artisan key:generate
sail artisan migrate
```
Verify you the command runs successfully and view your tables

### Optional
Add sail as an alias

```bash
alias sail='bash vendor/bin/sail'
```

## Commands

```bash
# Running Composer Commands
sail composer

# Artisan Commands
sail artisan

# PHP
sail php --version
sail php script.php


```

## Additional Resources
- [Sail](https://laravel.com/docs/8.x/sail) - Laravel's wrapper around docker-compose
- [Laravel](https://laravel.com/docs/8.x) - PHP Framework

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
