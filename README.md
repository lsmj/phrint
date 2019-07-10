# phrint (/prɪnt/)

Simple and visual state testing for PHP programming. Works well when checking if data is returned by a method and/or quickly figuring out the data type. The p method is particularily useful for temporarily displaying data on an html page instead of writing it to the database. This is especially effective in combination with [livereload](https://www.npmjs.com/package/livereload) and the livereload browser extension, so you can work on your controller/model while seeing the returned result update everytime you save.

![phrint_array](https://user-images.githubusercontent.com/35132192/60960803-0ed02300-a30b-11e9-9bfd-72ce8fbc713c.png)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents

- [Installation](#installation)
- [Manual Composer autoloading](#manual-composer-autoloading)
- [Import class](#import-class)
- [Methods](#methods)
- [p (print)](#p-print)
- [l (list)](#l-list)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

### Installation

```
composer require lsmj/phrint --dev
```

Uninstall:
```
composer remove lsmj/phrint --dev
```

### Manual Composer autoloading

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

#### Methods

### p (print)

Prints the input preformatted on a bleached yellow background. Especially useful when tracking state types and data. Objects are JSON encoded.

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

Prints the input string on a bleached yellow background as a list with line breaks. The default delimiter is `,` but a different one can be passed as the second argument. The third argument is an optional regex remove function.

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