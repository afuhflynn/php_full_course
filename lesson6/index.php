<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <?php
    $phrase = "Giraffe Academy";
    // $phrase = strtolower($phrase);
    echo "{$phrase} <br />";
    echo strtoupper($phrase);
    echo strlen($phrase);
    $phrase = str_replace("Giraffe", "Biraffe", $phrase);
    echo "{$phrase} <br />";
   echo substr($phrase, 8, 4)
    ?>
</body>

</html>
