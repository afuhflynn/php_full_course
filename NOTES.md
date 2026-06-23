# Notes for my php full course

## Lesson 1 (Introduction to php)

> php short for: `Hyper Text Processor` is a server side scripting language used for creating high performant web servers.

Embedding php into an html project may be some how tricky at first, but after some few walk around everything sticks in.

i.e:

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Html Page</title>
</head>

<body>
    <!-- To embed a php script do the following -->
    <?php ?>
</body>

</html>
```

To embed php in a web project or create a separate php file use:

```php
<?php
// Your script or block of code here.
?>
```

## Concatenation in php

To do this append a dot (.) in between the two strings.

```php
<?php
echo "Hello, " . "world";
?>
```

## Variables in php

`Variable names start with a $ symbol and then followed by the most used accepted or valid characters in popular programming languages`

e.g

```php
<?php
$username = "Afuh Flynn";
echo $username;
?>
```

### Embedding a variable into a string

This way more simpler in php than in js, py or other languages where you use string formatters.
> In php we simply embed or insert the variable name into the string  and nothing more.

```php
<?php
$username = "Afuh Flynn";
echo "Hello, $username" . " " . "How are you doing today?";

// NB: This does not work with single quotes
echo 'Hello, $username'; // outputs the string 'Hello, $username' and not 'Hello, Afuh Flynn'
?>
```

*NOTE:* Even though we can do all these, we can also use braces to include variables in strings

```php
<?php
$username = "Afuh Flynn";
echo "Hello, {$username}" . " " . "How are you doing today?"; // Hello, Afuh Flynn How are you doing today?
?>
```

## Lesson 2

### Short hand for <`?php echo $var_name ?>`

```php
<?php echo "hello, world"; ?>
// is equal to
<?= "hello, world" ?>
```

## Lesson 3

### Lists or Arrays in php

Just like what we do in js, py, c or other c like languages, we create lists or arrays with square ([]) brackets with the
values separated by commas.

```php
<?php
$books = ["Lake of Zaras", "The Lion King", "The Lost Civilization", "The Quote of Ozz"]

// To display the list items, we can loop through the list using the foreach loop in php
foreach ($books as $book){
    echo "<li>{$book}™️</li>";
}
?>
```

#### Using a templating methodology to display or render the items

```php
<?php
    <?php foreach ($books as $book) : ?>
        <li>
            <?= "{$book}™️" ?>
        </li>
    <?php endforeach ?>
?>
```
