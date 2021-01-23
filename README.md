# Take Home Assignment

### Tech Stack

* [Laravel](https://laravel.com) - web application framework with expressive, elegant syntax.
* [Docker](https://www.docker.com/) - an open platform for developing, shipping, and running applications

### Installation

Install the dependencies.

```sh
$ cd moneylion-test
$ composer install
```

Laravel Configurations.

```sh
$ sudo chmod -R 777 bootstrap/cache storage/
$ cp envs/.env.dev .env
$ php artisan key:generate
```
Start Docker.

```sh
$ sail up
```

Skip this step if all service containers are running okay. Following command will stop nginx, apache, and mysql services and restart docker.
```sh
$ sail down -v
$ sudo service nginx stop; sudo service apache2 stop; sudo service mysql stop;
$ sail up
```

Create neccetables and seed sample data.
```sh
$ sail artisan migrate
$ sail artisan db:seed
```

### Assignment Requirements
- [x] **GET /feature?email=XXX&featureName=XXX** - This endpoint receives email (user’s email) and featureName as request parameters and returns the following response in JSON format.
- [x] **POST /feature** - This endpoint receives the following request in JSON format and returns an empty response with HTTP Status OK (200) when the database is updated successfully, otherwise returns Http Status Not Modified (304).

### API List
Basic 
* **GET /feature?email=XXX&featureName=XXX**
* **POST /feature**
* **GET /feature/all**
* **GET /user/all**

With Oauth
* **GET /api/feature?email=XXX&featureName=XXX**
* **POST /api/feature**
* **GET /api/feature/all**
* **GET /api/user/all**

### Test with Postman
Import the collection [here](https://github.com/jayfrey/moneylion-test/blob/dev/Take-Home-Test.postman_collection.json)