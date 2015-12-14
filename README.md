This Zendx project is a base project which comes with the zendx library, simply a
collection of Zend Framework 1 extensions and select third-party libraries.

It includes the following additions to the framework:

* Laravel's Eloquent ORM
* LESS styles / Gulp
* Handlebars for sharing templates
* Improved automated testing
* Migrations with Phinx
* Zendx validation
* Zendx caching (with additional Redis option)

It assumes you have composer installed, learn how to install composer here - https://getcomposer.org/

## Getting started

```
git clone git@github.com:martynbiz/zendx-project.git myproject
cd myproject
composer install
```

Create a database for the project, edit `resources.eloquent.*` settings in application.ini
and the run migrations:

```
./vendor/bin/phinx migrate -e development
```

You should have basic project up and running with authentication.
