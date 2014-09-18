# HTML5 Forms for Laravel

This package extends Laravel's FormBuilder to include some (soon all) HTML5 elements.

## How to Install

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


## Supported Elements

Since the package extends the default FormBuilder, you can just use Form::field() like you would normally but with the following supported items: 

- [ ] color
- [ ] date
- [ ] datetime
- [ ] datetime-local
- [ ] email
- [ ] month
- [x] number
- [ ] range
- [ ] search
- [ ] tel
- [ ] time
- [ ] url
- [ ] week


## Usage

Think of generators as an easy way to speed up your workflow. Rather than opening the models directory, creating a new file, saving it, and adding the class, you can simply run a single generate command.

- [Color](#color)
- [Date](#date)
- [Datetime](#datetime)
- [Datetime-local](#datetime-local)
- [Email](#email)
- [Month](#month)
- [Number](#number)
- [Range](#range)
- [Search](#search)
- [Tel](#tel)
- [Time](#time)
- [URL](#url)
- [Week](#week)

### Color

To be added..

### Date

To be added..

### Datetime

To be added..

### Datetime-local

To be added..

### Email

To be added..

### Month

To be added..

### Number

```php
Form::number($name, $value = null, $options = array())
```

To specify a min/max range, add ```'minmax' => '0|10'``` to your options array. By default if no minmax is specified, it is min 0 and max 10.

**Tip**: To not output min/max, specify in options array 'minmax' => false


### Range

To be added..

### Search

To be added..

### Tel

To be added..

### Time

To be added..

### URL

To be added..

### Week

To be added..


## Reporting Bugs or Feature Requests

Please report any bugs or feature requests on the github issues page for this project here:

<https://github.com/Braunson/laravel-html5-forms/issues>


## Contributing

-   [Fork](https://help.github.com/articles/fork-a-repo) the [FatsecretLaravel on github](https://github.com/braunson/laravel-html5-forms)
-   Commit and push until you are happy with your contribution
-   Run the tests to make sure they all pass: `composer install && ./vendor/bin/phpunit`
-   [Make a pull request](https://help.github.com/articles/using-pull-requests)
-   Thanks!