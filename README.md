# Mr Simon Cohen + Slim Framework

> Mr Simon Cohen - A working Slim website example.

Read the post [here](https://www.codementor.io/lautiamkok/) about this repository.

# REQUIREMENTS

1. PHP 7.0.x
2. MySQL (optional)
3. Apache
4. Apache Mod-Rewrite or something equivalent that allows you to use clean URLs.
5. JavaScript enabled.
6. Slim Framework
7. Composer

# INSTALLATION

## Quick Setup

``` bash
# Dependencies
$ composer update

# Production build
$ cd [my-app-name]
$ php -S 0.0.0.0:8080 -t public
```

Then, access the app at http://localhost:8080/ (make sure that the port 8080 is not occupied by other application).

## Dependencies and Autoloader

1. Make sure you have Composer installed in your local machine.

    First, update the package manager cache by running:

    `$ sudo apt-get update`

    Downloading and Installing Composer:

    ```
    $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    $ php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    ```

    To install composer globally, use the following:

    `$ sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer`

    Or relocating it:

    `$ sudo mv composer.phar /usr/local/bin/composer`

    To test your installation, run:

    `$ composer`

    @refs:

    * https://getcomposer.org/download/
    * https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx
    * https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-16-04
    * http://tutorialforlinux.com/2016/09/08/how-to-install-php-composer-on-ubuntu-16-04-xenial-lts-linux/

2. Navigate to your project directory and run the line below to fetch all the dependencies and compiling PSR-4 autoloader:

    `$ composer update`

# Development

Replace [my-app-name] with the desired directory name for your new application.

You can then run it with PHP's built-in webserver:

`$ cd [my-app-name]; php -S 0.0.0.0:8080 -t public public/index.php`

# STRUCTURE

All PHP files aside from the front controller are placed **outside of the publicly accessible folder** (the document root on Apache), so they can't be accessed regardless of the status of the server.

```
/path/to/project/
    bootstrap.php
    config/
    library/
    module/
    source/
    vendor/
    public/
      .htaccess
      index.php
```

# References

* https://www.slimframework.com/
