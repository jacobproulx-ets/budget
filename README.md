# Budget

## Quick start for local development and maintenance

> Docker and Docker compose are required

### First time running the project

* Change directory to the root project (eg.: `cd ~/www/budget`)
* Start the containers `docker compose -p budget-containers up -d`
* "ssh" into the main container `docker exec -it budget-server bash`
* Install the dependencies `composer install && yarn`
* Create and edit the .env file `cp .env.example .env && php artisan key:generate`. Do not forget the mailgun API key
* Migrate and generate fixtures for the database `php artisan migrate`. If asked, create the database.
* Start the front end local server `yarn dev`

### Project already installed and containers already running

* "ssh" into the main container `docker exec -it budget-server bash`
* Start the front end local server `yarn dev`
* Go to [http://localhost:3081](http://localhost:3081)


## Docker Development Environment (Frontend and backend)

This project can be easily run with Docker. Take a look at the `docker-compose.yml` file. You will notice that this
project provide an image with php 8.0 with XDebug, composer, node 16 (LTS), phpmyadmin and a MariaDB server.

> If you don't want to use Docker, here is what the containers uses :
>
> * NodeJs 16.16.0
> * Php 8.0.19 with xdebug and other modules (mysqli, pdo, pdo_mysql, zip, opcache, gd)
> * [Composer](https://getcomposer.org/download/)
> * MariaDB 10.3.35
>
> Also, you will need to edit the proxy host in `vite.config.js`.
>
> Note that if you run into issues, it is harder to debug a different local environment. This is why we strongly
> recommend to install Docker on your computer in order to be able to use the images.

### Start the containers

run `docker compose -p budget-containers up -d --build`

> See the documentation for this command at https://docs.docker.com/engine/reference/commandline/compose/

> This creates the directory "mysql_files" that is ignored in git.

Go to [http://localhost:3080](http://localhost:3080) or [https://localhost:3443](https://localhost:3443) to see the
compiled project.

Go to [http://localhost:5087](http://localhost:5087) to access phpMyAdmin.

> Note that you might need to do some config on your machine in order to make the SSL work. Install the certificate at
> docker/certs/ca.ssl.indexnl.com.crt as trusted root. You might also need to manually install the localhost.crt and
> force your computer to trust it.

### Stop or remove the containers

You can either manage the containers with the Docker Desktop App, another Docker UI manager like Portainer, or by using
these command :

`docker stop $(docker ps -q -f "name=budget")` to stop containers

`docker rm -f $(docker ps -q -f "name=budget")` to remove containers

> To delete the database records, remove the directory "mysql_files" at the root of the project. Note that this
> directory is excluded from the repo.

### SSH into the container

`docker exec -it budget-server bash`

Go inside the main container in bash mode container with this command or with the Docker Desktop App.

### Install the dependencies

Note that the following commands need to be executed from inside the container or on your local machine with the
dependencies mentioned earlier.

* run `composer install` to install php dependencies
* run `yarn` to download node modules

### Artisan dev server

### Local servers recap

## Frontend - Vue

The front end is 100 % built in Vue 3. Go to `ressources/vue` to access the [frontend readme](./resources/vue/README.md)
.

* run `yarn dev`
* You can now access the Vue server at http://localhost:3282

> Notice that inside the container, the previous command started a local server at `0.0.0.0:3282`. Thanks to Docker
> binding ports, the container 3282 port is bound to the local machine 3282 port.

### [Vue logics documentation](documentation/vue-logics.md)

## Backend - Laravel

### [Rest api documentation](documentation/rest-api.md)

If you are using the docker development environment mentioned earlier, you do not need to start a dev server. If not,
start the dev server with `composer dev` You can now access the Laravel server at http://localhost:3082

> Notice that inside the container, the previous command started a local server at `0.0.0.0:3082`. Thanks to Docker
> binding ports, the container 3082 port is bound to the local machine 3082 port.

This project assumes that you know how to use Laravel. Checkout the documentation for more information.

Friendly reminder to do at first :

* Create your .env file with the desired values inside. `cp .env.example .env`
* Migrate with `php artisan migrate`


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

