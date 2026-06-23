<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Html Page</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }

    li {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php 
        $books = ["Lake of Zaras", "The Lion King", "The Lost Civilization", "The Quote of Ozz"]
    ?>

    <!-- Displaying the list of items using a loop -->
    <!-- <ul>
        <?php
            foreach ($books as $book){
                echo "<li>{$book}™️</li>";
            } 
        ?>
    </ul> -->

    <!-- Short hand for the for loop using a templating methodology. -->
    <ul>
        <?php foreach ($books as $book) : ?>
        <li>
            <?= "{$book}™️" ?>
        </li>
        <?php endforeach ?>
    </ul>
    <ul>
        <?php foreach ($books as $book) : ?>
        <li>
            <?= "{$book}™️" ?>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>