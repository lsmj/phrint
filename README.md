# phrint (/prɪnt/)

Simple and visual state testing for PHP programming. Works well when checking if data is returned by a method and/or quickly figuring out the data type. The p method is particularily useful for temporarily displaying data on an html page. This is especially effective in combination with [hot reloading](https://www.browsersync.io/), so you can work on your method while seeing the returned result update everytime you save. The c (console) method is useful for printing out data in a console during testing.

![phrint_array](https://user-images.githubusercontent.com/35132192/60960803-0ed02300-a30b-11e9-9bfd-72ce8fbc713c.png)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents

- [Installation](#installation)
  - [Install with Composer](#install-with-composer)
- [Usage](#usage)
  - [Auto-load and import class](#auto-load-and-import-class)
- [Methods](#methods)
  - [p (print)](#p-print)
  - [c (console)](#c-console)
  - [m (message)](#m-message)
  - [l (list)](#l-list)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->
## Installation
### Install with Composer
```bash
composer require lsmj/phrint --dev
```
Uninstall:
```bash
composer remove lsmj/phrint --dev
```
## Usage
### Auto-load and import class
Require Composer's autoload.php if you're not using a framework that already takes care of this, like Laravel. Import the class with `use lsmj\phrint`.

index.php:
```php
<?php

require_once('vendor/autoload.php');

use lsmj\phrint;
```
or in public/index.php:
```php
<?php

require_once('../vendor/autoload.php');

use lsmj\phrint;
```
## Methods

### p (print)
Prints the input type and data on a clutter free bleached yellow background. Especially useful when tracking state types or data. Objects are JSON encoded.

`p(mixed $input)`

Code example:
```php
$arr = [1, 2, 3];
phrint::p($arr);
```
Result:
```
Type: array
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
```

---

### c (console)
Prints the input type and content without formatting. Useful when printing messages in a console.

`c(mixed $input)`

---

### m (message)
Prints the input data on a clutter free bleached yellow background. Useful when printing messages that needs to be easy to find visually.

`m(string|int $input)`

---

### l (list)
Explodes and prints a comma-seperated string as a vertical list on a bleached yellow background. This is useful for viewing or counting elements (like in a CSV heading), creating a new array from the list, manipulating the element names or copying and pasting the resulting list into a spreadsheet.

`l(string $input, [string $delimiter = "'"], [string $remove_string = null])`

Code example:
```php
$str = 'a,b,c';
phrint::l($str);
```
Result:
```
1
2
3
```
The default delimiter is `,` but a different one can be passed as the second argument. The third argument is an optional `regex` function that replaces the given input string with an empty string.

Code example:
```php
$str = 'col-a.col-b.col-c';
phrint::l($str, '.', 'col-');
```
Result:
```
a
b
c
```
