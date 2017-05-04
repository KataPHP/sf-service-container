Kata Service
=======

Simple kata on Symfony Services.

Install
-------

1) Create a database to host this project
2) Clone this repository and execution the commands

```bash
$ composer install
```

Goals
-----

* Create Service (with dependencies)
* Use existing Symfony service

Instructions
------------

1) Create a new Class UppercaseTransformer to uppercase a given string
2) Declare this new class as a service into Symfony Service Container
3) Create a new Twig extension UppercaseExtension
    - Add new Filter MyUppercase (use our new UppercaseTransformer)
4) Use our new Filter on the title onto article/list.html.twig
5) We want to log (level Info) every Transformation

Links
-----

* http://symfony.com/doc/current/service_container.html
* http://symfony.com/doc/current/templating/twig_extension.html
