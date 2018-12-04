## Laravel Nova Telescope

Conveniently link Laravel Telescope to your Laravel Nova projects.

![Preview](https://imgur.com/MUvFMZY.png)

## Installation

You may use Composer to install the package into your Laravel Nova project:

```bash
composer require idecardo/nova-telescope
```

Register the `tool` with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// app/Providers/NovaServiceProvder.php

// ...
public function tools()
{
    return [
        // ...
        new \Idecardo\NovaTelescope\NovaTelescope,
    ];
}
```

## Configuration

If you want to modify the configurations, you must publish the configuration file:

```bash
php artisan vendor:publish --provider="Idecardo\NovaTelescope\ToolServiceProvider"
```

After publishing the configuration file, it will be located at `config/nova-telescope.php`.
Each configuration option includes a description of its purpose, so be sure to thoroughly explore this file.

## License

The package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
