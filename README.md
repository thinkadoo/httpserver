HttpServer
==========

## Starting the Built-In PHP Webserver and handling requests
### Returning a simple text response

```php
use thinkadoo\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

Builder::createBuiltInServer(function (Request $request) {
        return "Hello " . $request->get('name');
    })->listen(8080);

```

### Returning a Response (one Silex application)
```php
use thinkadoo\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app->get('/', function () {
        return 'Hello';
    });

$app->get('/hello/{name}', function ($name) {
        return 'Hello ' . $name;
    });

Builder::createBuiltInServer(function (Request $request) use ($app) {
        return $app->handle($request);
    })->listen(8080);
```

## Starting one React Webserver and handling requests
https://github.com/reactphp/react
### Returning a simple text response

```php
use thinkadoo\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

Builder::createReactServer(function (Request $request) {
        return "Hello " . $request->get('name');
    })->listen(8080);

```

### Returning a Response (one Silex application)
```php
use thinkadoo\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app->get('/', function () {
        return 'Hello';
    });

$app->get('/hello/{name}', function ($name) {
        return 'Hello ' . $name;
    });

Builder::createReactServer(function (Request $request) use ($app) {
        return $app->handle($request);
    })->listen(8080);
```
