# PHP 5.5 Demos

Here's a handful of demos showing some of the new features in PHP 5.5.

## Empty Expressions

Prior to PHP 5.5, empty() would only accept variables, not function results.

## Finally Keyword

You can now use the 'finally' keyword after a 'catch' block to execute code after a 'try', no matter if
an Exception was thrown or not.

## Generators

Generators allow efficient iteration without having to create a complex Iterator class.

## Non-Scalar Foreach Keys

Under PHP 5.5 and later, you can return non-scalar keys from Iterators (and Generators).

## Set CLI Proc Title

Under PHP 5.5 and later, you can set the process title under the CLI SAPI, without the need for any extensions (such as proctitle, required under PHP <= 5.4).