This is a PHP Enum Solution using classes and type hinting. **Also you can build a taxonomies of enums!**

An enumeration type, "enum" for short, is a data type to categorise named values. Enums can be used instead of hard coded strings to represent, for example, the status of a blog post in a structured and typed way.

In July 2019, I wrote a gist searching a solution for this.

[https://gist.github.com/rafageist/aef9825b7c935cdeb0c6187a2d363909/revisions](https://gist.github.com/rafageist/aef9825b7c935cdeb0c6187a2d363909/revisions)

Then I convert the gist in a real project. [https://www.phpclasses.org/package/11366-PHP-Implement-enumerated-values-using-classes.html](https://www.phpclasses.org/package/11366-PHP-Implement-enumerated-values-using-classes.html)

## The problem

Before 8.1, PHP didn't have a native enum type, only a very basic SPL implementation ([https://www.php.net/manual/en/class.splenum.php](https://www.php.net/manual/en/class.splenum.php)), but this really doesn't cut the mustard. Some solutions using constants, but not resolve the problem. How to validate HOT or COLD ?

```
<?php

const HOT = 1;
const COLD = 2;

const FIRE = 1;
const ICE = 2;

function doSomething(int $temperature) { /* ... */}

doSomething(FIRE);
```

From 8.1, PHP have a enums implementation ([https://www.php.net/manual/en/language.types.enumerations.php](https://www.php.net/manual/en/language.types.enumerations.php)). And now you can combine this solution with the new features of PHP.

There's a popular package called **myclabs/php-enum**. It's really awesome, but have a problem because we lose static analysis benefits like auto completion and refactoring.

## The solution

Use PHP!

The class **divengine\enum** help you, but remember: _the most important solution is the concept of this library_.

With this class, you can solves the following problems:

1. Constants with different names and equal value can be used as function arguments
2. Lose static analysis benefits like auto completion and refactoring
3. Maintaining duplicated code when use docblock type hints to solve the first problem

We need have built-in enums in PHP ! But, for now, this is a solution.

## Installation

**Composer:**

```
composer require divengine\enum;
```

**Manual:**

Clone the repo:

```
git clone https://github.com/divengine/enum
```

Include the lib:

```
include "/path/to/divengine/enum/src/folder/enum.php";
```

[[Example of Div PHP Enum]]
[[Analogy with Java]]