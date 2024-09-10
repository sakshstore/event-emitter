# PHP Event Emitter

A simple EventEmitter class for PHP.

## Installation

You can install the package via Composer:

```bash
composer require saksh/event-emitter
```

## Usage

```php
require 'vendor/autoload.php';

use saksh\SakshEventEmitter\EventEmitter;

$emitter = new EventEmitter();

function example_event_listener($message) {
    echo $message;
}

$emitter->on('greet', 'example_event_listener');
$emitter->emit('greet', 'Hello, World!'); // Output: Hello, World!
$emitter->off('greet', 'example_event_listener');
$emitter->emit('greet', 'Hello again!'); // No output
```

## Publish the Package

To publish your package, create a repository on GitHub (or any other Git hosting service) and push your code there. Then, submit your package to [Packagist](https://packagist.org/) by following their instructions.

Once your package is published, you can install it in any PHP project using Composer:

```bash
composer require saksh/event-emitter
```

This will allow you to use the EventEmitter class in any PHP project. Let me know if you need any further assistance!
