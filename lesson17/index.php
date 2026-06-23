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

      function __construct($Title, $Author, $Pages){
        $this->title = $Title;
        $this->author = $Author;
        $this->pages = $Pages;
      }


      function printValues(){
        echo "$this->title, $this->author, $this->pages";
      }
    }
    $book1 = new Book("The latest entrepreneur in town.", "Afuh Flynn", 40);

    $book1->printValues()

    ?>
</body>

</html>
