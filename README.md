# Install

Add the next things

1. Run `composer require webxid/laravel-debug-helpers --dev` in command line

2. File `/artisan`, after `define('LARAVEL_START', microtime(true));`
```php
if (file_exists(__DIR__.'/vendor/webxid/laravel-debug-helpers/src/helpers.php')) {
    require __DIR__.'/vendor/webxid/laravel-debug-helpers/src/helpers.php';
}
```

3. File `/public/index.php`, after `define('LARAVEL_START', microtime(true));`
```php
if (file_exists(__DIR__.'/../vendor/webxid/laravel-debug-helpers/src/helpers.php')) {
    require __DIR__.'/../vendor/webxid/laravel-debug-helpers/src/helpers.php';
}
```

# How To Use

This lib halps to improve the default Laravel debug stuff:

- Adds a function call place Route for `dd()` into the and of print

  ![](https://i.imgur.com/WAvlv2l.png)
  ![](https://i.imgur.com/qnplvss.png)

- Adds redirect place into a page headers

  ![](https://i.imgur.com/2beMEEI.png)
  [![](https://i.imgur.com/pkyLBJG.png)](https://imgur.com/pkyLBJG)

- `_dd()` write a dump into `storage/logs/laravel.log`. It replaces the content (by default) or adds a string in the end of the file (check the function parameters)

  ![](https://i.imgur.com/ZIsRJVY.png)
  ![](https://i.imgur.com/5TDEhih.png)
  ![](https://i.imgur.com/M1Up6JG.png)

- `_trace()` halps to understand, how a script comes in some place of code

  ![](https://i.imgur.com/kQA68HR.png)
  [![](https://i.imgur.com/DHQ4udL.png)](https://imgur.com/DHQ4udL)
