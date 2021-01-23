# Take Home Assignment

### Tech Stack

* [Laravel](https://laravel.com) - web application framework with expressive, elegant syntax.
* [Docker](https://www.docker.com/) - an open platform for developing, shipping, and running applications

### Installation

Install the dependencies and devDependencies.

```sh
$ cd moneylion-test
$ composer install
```

Laravel Configurations

```sh
$ sudo chmod -R 777 bootstrap/cache storage/
$ cp envs/.env.dev .env
$ php artisan key:generate
```
Start Docker by running "sail up" ( If failing at starting mysql/web server, then the port could be currently in use. Run "sudo service nginx stop; sudo service apache2 stop; sudo service mysql stop;" then run "sail up" again )

```sh
$ sail up
```

Create tables and seed sample data
```sh
$ sail artisan migrate
$ sail artisan db:seed
```

### Requirements
- [x] **GET /feature?email=XXX&featureName=XXX** - This endpoint receives email (user’s email) and featureName as request parameters and returns the following response in JSON format.
- [x] **POST /feature** - This endpoint receives the following request in JSON format and returns an empty response with HTTP Status OK (200) when the database is updated successfully, otherwise returns Http Status Not Modified (304).