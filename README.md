# phrint (/prɪnt/)

Simple but handy echo functions for PHP programming.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents

- [Installation](#installation)
- [Composer autoloading in non-Laravel apps](#composer-autoloading-in-non-laravel-apps)
- [Import class](#import-class)
- [Method: p (print)](#method-p-print)
- [Method: l (list)](#method-l-list)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

### Installation

```
composer install lsmj\phrint
```

### Composer autoloading in non-Laravel apps

```
require_once('vendor/autoload.php');
```

### Import class

```
use lsmj\phrint;
```

### Method: p (print)

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

Prints the input preformatted on a bleached yellow background. Especially useful when researching state types. Objects are JSON encoded.



### Method: l (list)

```
$str = 'a,b,c';
phrint::l($arr);
```

Result:

```
1
2
3
```

Prints the input string on a bleached yellow background as a list with line breaks. The default delimiter is a comma but another can be passed as the second argument. The third argument is an optional regex remove function.

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