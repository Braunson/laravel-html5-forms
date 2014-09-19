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


## Usage / Supported Element Types

Since the package extends the default FormBuilder, you can just use Form::field() like you would normally but with the following supported items.

- [Color](#color)
- [Date](#date)
- [Time](#time)
- [Datetime](#datetime)
- [Datetime-local](#datetime-local)
- [Email](#email)
- [Week](#week)
- [Month](#month)
- [Number](#number)
- [Range](#range)
- [Search](#search)
- [Tel](#tel)
- [Time](#time)
- [URL](#url)

### Color

```php
Form::color($name, $value = null, $options = array())
```

### Date

```php
Form::date($name, $min = null, $max = null, $options = array())
```

This field requires you input atleast min or max or both fields.

### Time

```php
Form::time($name, $options = array())
```

### Datetime

```php
Form::dateTime($name, $options = array())
```

### Datetime-local

```php
Form::dateTimeLocal($name, $options = array())
```

### Email

```php
Form::email($name, $value = null, $options = array())
```

### Week

```php
Form::week($name, $value = null, $options = array())
```

### Month

```php
Form::month($name, $value = null, $options = array())
```

### Number

```php
Form::number($name, $value = null, $options = array())
```

To specify a min/max range, add ```'minmax' => '0|10'``` to your options array. By default if no minmax is specified, it is min 0 and max 10.

**Tip**: To not output min/max, specify in options array 'minmax' => false

### Range

```php
Form::range($name, $value = null, $options = array())
```

To specify a min/max range, add ```'minmax' => '0|10'``` to your options array. By default if no minmax is specified, it is min 0 and max 10.

**Tip**: To not output min/max, specify in options array 'minmax' => false

### Search

```php
Form::search($name, $value = null, $options = array())
```

### Tel

```php
Form::tel($name, $value = null, $options = array())
```

### URL

```php
Form::url($name, $value = null, $options = array())
```


## Reporting Bugs or Feature Requests

Please report any bugs or feature requests on the github issues page for this project here:

<https://github.com/Braunson/laravel-html5-forms/issues>


## Contributing

-   [Fork](https://help.github.com/articles/fork-a-repo) the [Laravel-HTML5-Forms on github](https://github.com/braunson/laravel-html5-forms)
-   Commit and push until you are happy with your contribution
-   Run the tests to make sure they all pass: `composer install && ./vendor/bin/phpunit`
-   [Make a pull request](https://help.github.com/articles/using-pull-requests)
-   Thanks!