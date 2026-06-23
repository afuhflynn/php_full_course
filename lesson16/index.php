<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <?php
    class Book {
      var $title;
      var $author;
      var $pages;
    }

    $book1 = new Book;

    $book1->title = "The latest entrepreneur in town.";
    $book1->author = "Afuh Flynn";
    $book1->pages = 40;

    echo "$book1->title, $book1->author, $book1->pages";
    ?>
</body>

</html>
