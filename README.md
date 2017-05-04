Kata Service Container
=======

Kata on Symfony Services Container.

Install
-------

1) Create a database to host this project
2) Clone this repository and execution the commands

```bash
$ composer install
```

3) Run this project

```bash
$ php bin/console server:run
```

Goals
-----

* Create a new service (with dependencies)
* Use existing Symfony services

Instructions
------------

1) Create a new Class UppercaseTransformer to uppercase a given string
2) Declare this new class as a service into Symfony Service Container
3) Add our UppercaseTransformer into Twig UppercaseExtension instead of strtoupper function
5) Add logger service into our new transformer to log every Transformation (level Info)

Links
-----

* http://symfony.com/doc/current/service_container.html
* http://symfony.com/doc/current/templating/twig_extension.html
