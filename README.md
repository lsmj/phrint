# phrint (/prɪnt/)

Simple and visual state testing for PHP programming. Works well when checking if data is returned by a method and/or quickly figuring out the data type. The p method is particularily useful for temporarily displaying data on an html page instead of writing it to the database. This is especially effective in combination with [livereload](https://www.npmjs.com/package/livereload) and the livereload browser extension, so you can work on your controller/model while seeing the returned result update everytime you save.

![phrint_array](https://user-images.githubusercontent.com/35132192/60960803-0ed02300-a30b-11e9-9bfd-72ce8fbc713c.png)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Method: p (print)](#p-print)
- [Method: l (list)](#l-list)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->
## Installation
### Install with Composer
```
composer require lsmj/phrint --dev
```
Uninstall:
```
composer remove lsmj/phrint --dev
```
## Usage
### Autoload
Require autoload.php if you're not using a framework that already takes care of this, like Laravel.

index.php:
```
require_once('vendor/autoload.php');
```
public/index.php:
```
require_once('../vendor/autoload.php');
```
### Import class
```
use lsmj\phrint;
```
## Methods
### p (print)
Prints the input preformatted on a bleached yellow background. Especially useful when tracking state types or data. Objects are JSON encoded.
```
phrint::p(array $input);
```
Example code:
```
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
### l (list)
Explodes and prints a comma-seperated string as a vertical list on a bleached yellow background. This is useful for viewing or counting elements (like in a CSV heading), creating a new array from the list, manipulating the element names or copying and pasting the resulting list into a spreadsheet.
```
phrint::l(string $input, [string $delimiter = "'"], [string $remove_string = null])
```
Example code:
```
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

Example code:
```
$str = 'col-a.col-b.col-c';

phrint::l($str, '.', 'col-');
```
Result:
```
a
b
c
```