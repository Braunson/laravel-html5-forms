HTML5 Forms for Laravel (extends FormBuilder)
===================

This package extends Laravel's FormBuilder to include some (soon all) HTML5 elements.

How to Install
--------------

1.  Install the `braunson/laravel-html5-forms` package

    ```shell
    $ composer require "braunson/laravel-html5-forms:dev-master"
    ```

2.  Update `app/config/app.php` to activate the package

    ```php
    # Add `LaravelHTML5FormsServiceProvider` to the `providers` array
    'providers' => array(
        ...
        'Braunson\LaravelHTML5Forms\LaravelHTML5FormsServiceProvider',
    )
    ```


Usage
------------------------

Since the package extends the default FormBuilder, you can just use Form::field() like you would normally but with the following supported items: 

- color
- date
- datetime
- datetime-local
- email
- month
- number
- range
- search
- tel
- time
- url
- week


Reporting Bugs or Feature Requests
----------------------------------

Please report any bugs or feature requests on the github issues page for this project here:

<https://github.com/Braunson/Laravel-HTML5-Forms/issues>


Contributing
------------

-   [Fork](https://help.github.com/articles/fork-a-repo) the [FatsecretLaravel on github](https://github.com/braunson/Laravel-HTML5-Forms)
-   Commit and push until you are happy with your contribution
-   Run the tests to make sure they all pass: `composer install && ./vendor/bin/phpunit`
-   [Make a pull request](https://help.github.com/articles/using-pull-requests)
-   Thanks!