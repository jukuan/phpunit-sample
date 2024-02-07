# PHPUnit Sample Project
This is a small project demonstrating the usage of PHPUnit for testing purposes.

## Prerequisites
- PHP 8.1 or higher
- Composer (Dependency Manager for PHP)

## Installation
Clone the repository and run the test
```bash
$ git clone git@github.com:jukuan/phpunit-sample.git
$ ./vendor/bin/phpunit tests
```

## How to add the phpunit for new or existed project
Here are steps what I did to start that project:
```
$ composer require --dev phpunit/phpunit
$ mkdir tests
$ vim tests/SampleSumTest.php
$ ./vendor/bin/phpunit tests
```

## What's inside
There are samples how to cover by test simple functions:
- function sum(int $a, int $b): int
- function isValidEmail(string $str): bool
- function isCorrectEmail(string $str): bool
For simplicity sake all functions are in files with tests.

Have fun. GL!
